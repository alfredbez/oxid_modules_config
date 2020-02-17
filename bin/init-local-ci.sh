#!/bin/bash

function e_header()  { echo -e "\n\033[1m$*\033[0m"; }
function e_success() { echo -e " \033[1;32m✔\033[0m  $*"; }
function e_error()   { echo -e " \033[1;31m✖\033[0m  $*"; }
function e_arrow()   { echo -e " \033[1;34m➜\033[0m  $*"; }

if [ -z "$CI_SYSTEM" ]; then
    e_error "do not run this script directly"
    e_arrow "to work on your local machine run the following commands:"
    echo "$ docker-compose up --build -d"
    echo "$ docker-compose exec php bash"
    e_arrow "After that you need to init the shop once in the container:"
    echo "root@b2c748c28185:/srv# bin/init-local-ci.sh"
    exit
fi

e_header "installing composer dependencies"
composer install -n && e_success "done"

e_header "install oxid shop and prepare for tests"
vendor/bin/install-oxid > /dev/null && e_success "done"

e_header "symlink module to shop folder"
rm -rf ~/OXID/source/modules/oxps/modulesconfig || echo 'Module directory does not exist yet'
mkdir ~/OXID/source/modules/oxps/
ln -s /srv ~/OXID/source/modules/oxps/modulesconfig

bash /srv/.ci.setup.sh
docker-php-ext-enable xdebug
