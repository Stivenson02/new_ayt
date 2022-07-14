<?php
if (! function_exists('slug_token')) {
    function slug_token($string)
    {
        return \Illuminate\Support\Str::slug(md5(\Illuminate\Support\Str::slug($string, rand())));
    }
}
