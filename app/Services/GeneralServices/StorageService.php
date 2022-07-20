<?php

namespace App\Services\GeneralServices;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Class StorageService.
 */
class StorageService
{
    public static function created($file, $folder)
    {
        #TODO Agrega validacio de error
        $image_resize = Image::make($file->getRealPath());
        $size=($image_resize->filesize());
        if ($size <= 4000000){
            $path = Storage::disk('public')->put($folder, $image_resize);
        }else{
            return "IMG MUY PESADA";
        }

        /*
        $re= $file->store('public');*/
    }

}
