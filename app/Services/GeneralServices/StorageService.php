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
        $input['imagename'] = time().'.'.$image->extension();

        $filePath = public_path('/thumbnails');
        $img = Image::make($image->path());
        $img->resize(110, 110, function ($const) {
            $const->aspectRatio();
        });

        $img->save($filePath . '/' .$folder.'/'. $input['imagename'],100);
        dd($image->path());

        /*save($filePath . '/' . $input['imagename']);*/

        $filePath = public_path('/images');
        $image->move($filePath, $input['imagename']);

        $image_resize = Image::make($file->getRealPath());
        $size = ($image_resize->filesize());
        if ($size <= 4000000) {
            return $path = Storage::disk('public')->put($folder, $file);;
        } else {
            Session::flash('message', 'La imagen es muy pesada, cargue otra imagen');
        }

    }

}
