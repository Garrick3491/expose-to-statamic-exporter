<?php

namespace Parallax\ExposeStatamicExport\Statamic\Asset;

use Statamic\Facades\Asset;

class EntryExists
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
