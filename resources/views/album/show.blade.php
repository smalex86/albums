@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
{{ var_dump($album) }}
<p>Альбом:</p>
<ul>
    @foreach ($album->getAttributes() as $attr)
    <li>{{ $attr }}:{{ $album->getAttribute($attr) }}</li>
    @endforeach
</ul>    
@endsection

