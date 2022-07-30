<?php

namespace App\Services\GeneralServices;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


/**
 * Class StorageService.
 */
class StorageService
{
    public static function created($file, $folder)
    {
        $image = $file;
        $input['imagename'] = time() . '.' . $image->extension();

        $save_path = 'thumbnails/' . $folder;
        if (!file_exists($save_path)) {
            mkdir($save_path, 0755, true);
        }

        $filePath = public_path($save_path);
        $img = Image::make($image->path());
        $img->resize(600, 300, function ($const) {
            $const->aspectRatio();
        });

        $img->save($filePath . '/' . $input['imagename'], 100);

        return ([
            'image' => $save_path . '/' . $input['imagename'],
            'image_name' => $input['imagename'],
            'image_folder' => $folder,
        ]);

    }

    public static function delete($image_path)
    {
        unlink('thumbnails/' . $image_path);
    }

}
