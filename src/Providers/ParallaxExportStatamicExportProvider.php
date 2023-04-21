<?php

namespace Parallax\ExposeStatamicExport\Providers;

use Illuminate\Support\ServiceProvider;
use Netcarver\Textile\Parser;
use Parallax\ExposeStatamicExport\Expose\Textile\TextileParser;

class EnvatoCustomServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('Parallax\ExposeStatamicExport\Expose\Textile\TextileParser', function ($app) {
            return new TextileParser(new Parser());
        });
    }
}
