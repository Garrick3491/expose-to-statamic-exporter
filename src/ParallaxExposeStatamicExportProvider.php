<?php

namespace Parallax\ExposeStatamicExport\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Parallax\ExposeStatamicExport\Statamic\Asset\AssetExists;
use Statamic\Assets\AssetRepository;

class ParallaxExposeStatamicExportProvider extends ServiceProvider
{
    public $singletons = [
        // AssetExists::class => AssetRepository::class
    ];
    public function register()
    {

    }
}
