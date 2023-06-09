<?php

namespace Garrick3491\ExposeStatamicExport\Statamic\Asset;

use Statamic\Facades\Asset;

class AssetExists
{
    public function doesAssetExist(string $assetContainer, string $fileName)
    {
        $asset = Asset::query()
            ->where('container', $assetContainer)
            ->where('path', $fileName)
            ->get();

        return !$asset->isEmpty();

    }
}
