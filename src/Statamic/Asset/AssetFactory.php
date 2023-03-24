<?php 
namespace Parallax\ExposeStatamicExport\Statamic\Asset;

use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Parallax\ExposeStatamicExport\Statamic\Entry\Exception\DoesNotExistException;
use Statamic\Assets\AssetContainer;
use Statamic\Facades\Entry;

class AssetFactory
{
    public function createNewAsset(string $container, string $fileName, string $filePath)
    {

        $container = AssetContainer::find($container);

        $asset = $container->makeAsset(strtolower($fileName));

        
        $file = new File($filePath);

        $asset->upload($file);

        $asset->save();

        return $asset;
    }
}

?>