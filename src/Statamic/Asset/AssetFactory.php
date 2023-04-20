<?php 
namespace Parallax\ExposeStatamicExport\Statamic\Asset;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Parallax\ExposeStatamicExport\Statamic\Entry\Exception\DoesNotExistException;
use Statamic\Assets\AssetContainer;
use Statamic\Facades\Entry;

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

?>