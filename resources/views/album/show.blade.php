@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<p>Альбом:</p>
<ul>
    @foreach ($album->getAttributes() as $key=>$value)
    <li>{{ $key }}:{{ $value }}</li>
    @endforeach
</ul>
@endsection
