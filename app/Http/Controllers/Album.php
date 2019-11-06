<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Album extends Controller
{
    
    function index() {
//        return 'album_list';
       return view('album.index');
    }
    
}
