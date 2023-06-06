<?php

namespace  App;

use App\PhotoConverterLibrary\Converters\Animator;
use App\PhotoConverterLibrary\Converters\ColorCorrection;
use App\PhotoConverterLibrary\Converters\GIF;
use App\PhotoConverterLibrary\Converters\JPG;
use App\PhotoConverterLibrary\Converters\PNG;
use App\PhotoConverterLibrary\Photo;

class PhotoConverterFacade
{
    public static  function convertToGIF(Photo $photo)
    {
        $animator = new Animator();
        $gifConverter = new GIF($animator);
        $photo->name .= '.gif';
        return $gifConverter->convert($photo);
    }

    public static function convertToJPG(Photo $photo)
    {
        $colorCorrection = new ColorCorrection;
        $photo->setState($colorCorrection->correctColor());
        $photo->name .= '.jpg';
        $jpgConverter = new JPG();
        return $jpgConverter->convert($photo);
    }

    public static function convertToPNG(Photo $photo)
    {
        $photo->name .= '.png';
        $pngConverter = new PNG();
        return $pngConverter->convert($photo);
    }

}
