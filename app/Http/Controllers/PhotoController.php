<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    public function thumbImage($albumId, $guid) {
        return Photo::getImage(Photo::getPhoto($albumId, $guid), 'thumbs');
    }

    public function showImage($albumId, $guid) {
        return Photo::getImage(Photo::getPhoto($albumId, $guid), 'shows');
    }

    public function originalImage($albumId, $guid) {
        return Photo::getImage(Photo::getPhoto($albumId, $guid), 'originals');
    }

}
