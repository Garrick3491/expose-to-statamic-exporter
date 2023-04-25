<?php

namespace Garrick3491\ExposeStatamicExport;

use Illuminate\Support\ServiceProvider;
use Garrick3491\ExposeStatamicExport\Statamic\Asset\AssetExists;
use Statamic\Assets\AssetRepository;

class ExposeStatamicExportProvider extends ServiceProvider
{
    public $singletons = [
        // AssetExists::class => AssetRepository::class
    ];
    public function register()
    {

    }
}
