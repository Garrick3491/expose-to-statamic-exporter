<?php

namespace Parallax\ExposeStatamicExport\Statamic\Asset;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Statamic\Assets\AssetContainer;

class AssetFactory
{
    public function createNewAsset(string $container, string $fileName, string $filePath)
    {

        $container = AssetContainer::find($container);

        $asset = $container->makeAsset($fileName);


        $file = new UploadedFile($filePath, $fileName);

        $asset->upload($file);

        $asset->save();

        return $asset;
    }
}
