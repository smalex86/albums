<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Album;

class Photo extends Model
{

    public $fillable = [
        'name', 'filename', 'guid'
    ];

    public function album()
    {
        return $this->belongsTo('App\Album');
    }

    public static function getImage($photo, $storage) {
        if (!$photo) {
            return null;
        }

        return Storage::disk($storage)->download($photo->album_id . '/' . $photo->filename);
    }

    public static function getPhoto($albumId, $guid) {
        $album = Album::where('id', $albumId)->first();
        if (!$album) {
            return null;
        }

        $photo = $album->photos()->where('guid', $guid)->first();
        if (!$photo) {
            return null;
        }

        return $photo;
    }

}
