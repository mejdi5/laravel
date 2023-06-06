<?php

namespace App\Http\Controllers;

use App\PhotoConverterFacade;
use App\PhotoConverterLibrary\Photo;

class FacadeController extends Controller
{
    public function index()
    {
      $photo_1 = new Photo('photo1');
      $jpg_converted_photo = PhotoConverterFacade::convertToJPG($photo_1);
      dump($jpg_converted_photo);

      $photo_2 = new Photo('photo2');
      $png_converted_photo = PhotoConverterFacade::convertToPNG($photo_2);
      dump($png_converted_photo);

      $photo_3 = new Photo('photo3');
      $gif_converted_photo = PhotoConverterFacade::convertToGIF($photo_3);
      dump($gif_converted_photo);
    }
}
