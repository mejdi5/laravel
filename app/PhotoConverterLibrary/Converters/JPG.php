<?php


namespace App\PhotoConverterLibrary\Converters;

use App\PhotoConverterLibrary\Photo;

class JPG
{
    public function convert(Photo $photo)
    {
        $photo->setType('.jpg');
        return $photo;
    }
}
