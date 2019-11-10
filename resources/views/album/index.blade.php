@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<p>Альбомы:</p>
<ul>
    @foreach ($albums as $album)
    <li>id:{{ $album->id }}, name:{{ $album->name }}, title:{{ $album->title }}, lf:{{ $album->local_folder }}</li>
    @endforeach
</ul>    
@endsection

