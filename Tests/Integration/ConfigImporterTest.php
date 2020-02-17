<?php

namespace OxidProfessionalServices\ModulesConfig\Tests\Integration;

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Application\Model\Shop;
use PHPUnit\Framework\TestCase;

class ConfigImporterTest extends TestCase
{
    private $destPath = OX_BASE_PATH . '/modules/oxps/modulesconfig/configurations/';

    public function setUp(): void
    {
        $query = "UPDATE oxconfig SET oxvarvalue = ENCODE('configurations', 'fq45QS09_fqyx09239QQ') "
            . "WHERE OXVARNAME = 'OXPS_MODULESCONFIG_SETTING_CONFIGURATION_DIRECTORY'";
        DatabaseProvider::getDb()->execute($query);

        if (!file_exists($this->destPath)) {
            mkdir($this->destPath);
        }

        $cleanupQueries = [
            "DELETE FROM oxconfig WHERE OXVARNAME IN ('moduleVariable', 'sTheme', 'aCurrencies', 'aDetailImagesSizes')",
            'UPDATE oxshops SET OXORDERSUBJECT = ""',
        ];
        foreach ($cleanupQueries as $cleanupQuery) {
            DatabaseProvider::getDb()->execute($cleanupQuery);
        }
    }

    private function copyYaml($inputFilename, $outputFilename = false)
    {
        $outputFilename = $outputFilename ?: $inputFilename;
        copy(__DIR__ . '/Testdata/' . $inputFilename, $this->destPath . $outputFilename);
    }

    public function testImportValidYamlFile()
    {
        // copy test-file
        $this->copyYaml('valid.yaml', 'shop1.yaml');
        $this->copyYaml('shops.yaml');

        // run import
        exec('php ' . OX_BASE_PATH . '../vendor/bin/oxid config:import --env=development', $output, $exitCode);
        $this->assertEquals(0, $exitCode);
        $this->assertContains('done', $output);

        // see data in db
        $this->assertSame(
            'foobar',
            Registry::getConfig()->getConfigParam('moduleVariable'),
            'Imports module settings'
        );
        $this->assertSame(
            '456*123',
            Registry::getConfig()->getConfigParam('aDetailImageSizes')['oxpic2'],
            'Imports theme settings'
        );
        $this->assertSame(
            'EUR@ 1.00@ ,@ .@ €@ 2',
            Registry::getConfig()->getConfigParam('aCurrencies')[0],
            'Imports general settings'
        );

        $shop = new Shop();
        $shop->load(1);
        $this->assertSame(
            'baz',
            $shop->oxshops__oxordersubject->value,
            'Imports shop settings'
        );
    }

    public function testGeneratesSerial()
    {
        $this->markTestSkipped(
            "It's currently not possible to run EE related tests"
        );

        // copy test-file
        $this->copyYaml('valid.yaml', 'shop1.yaml');
        $this->copyYaml('shops.yaml');

        // run import
        exec('php ' . OX_BASE_PATH . '../vendor/bin/oxid config:import --env=development', $output, $exitCode);
        $this->assertEquals(0, $exitCode);
        $this->assertContains('generated OXSERIAL', $output);
        $this->assertContains('done', $output);
    }

    public function testImportsMultipleShops()
    {
        $this->markTestSkipped(
            "It's currently not possible to run EE related tests"
        );
        // copy test-file
        $this->copyYaml('shop1.yaml');
        $this->copyYaml('shop2.yaml');
        $this->copyYaml('shops_multi.yaml', 'shops.yaml');
        // $this->createShop(2);

        // run import
        exec('php ' . OX_BASE_PATH . '../vendor/bin/oxid config:import --env=development', $output, $exitCode);
        $this->assertEquals(0, $exitCode);
        $this->assertContains('generated OXSERIAL', $output);
        $this->assertContains('done', $output);

        $shop = new Shop();
        $shop->load(1);
        $this->assertSame(
            'Shop One',
            $shop->oxshops__oxname->value,
            'Imports shop settings for shop 1'
        );

        $shop = new Shop();
        $shop->load(2);
        $this->assertSame(
            'Shop Two',
            $shop->oxshops__oxname->value,
            'Imports shop settings for shop 2'
        );
    }
}
