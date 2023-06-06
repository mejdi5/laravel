<?php


namespace App\PhotoConverterLibrary\Converters;

use App\PhotoConverterLibrary\Photo;

class PNG
{
    public function convert(Photo $photo)
    {
        $photo->setType('.png');
        return $photo;
    }
}
