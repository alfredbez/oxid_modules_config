#!/bin/bash
sed -i "s#BASEPATH#$(pwd)#" infection.json.integration
cd ~/OXID || exit
# composer remove -n --dev incenteev/composer-parameter-handler oxid-esales/testing-library
# composer require -n phpunit/phpunit ^8

composer require oxid-professional-services/oxid-console

vendor/bin/oe-console oe:module:install-configuration source/modules/oxps/modulesconfig
vendor/bin/oe-console oe:module:activate oxps/modulesconfig
