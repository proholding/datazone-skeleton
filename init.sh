#!/usr/bin/env bash
composer install
php bin/console doctrine:schema:update --force
yarn install
yarn encore dev