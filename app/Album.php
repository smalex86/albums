<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function getThumbFiles() {
        return Storage::disk('thumbs')->allFiles($this->id);
    }

}
