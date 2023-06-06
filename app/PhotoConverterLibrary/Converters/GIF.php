<?php


namespace App\PhotoConverterLibrary\Converters;

use App\PhotoConverterLibrary\Converters\Animator;
use App\PhotoConverterLibrary\Photo;

class GIF
{
    private $animator;

    public function __construct(Animator $animator)
    {
        $this->animator = $animator;
    }

    public function convert(Photo $photo)
    {
        $photo->setType('.gif');
        $photo->setState($this->animator->animatePhoto($photo));
        return $photo;
    }
}
