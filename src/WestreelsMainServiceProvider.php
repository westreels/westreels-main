<?php

namespace Westreels\WestreelsMain;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Westreels\WestreelsMain\Commands\WestreelsMainCommand;

class WestreelsMainServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('westreels-main')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_westreels-main_table')
            ->hasCommand(WestreelsMainCommand::class);
    }
}
