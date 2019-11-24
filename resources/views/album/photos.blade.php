@extends('layouts.app')

@section('title', config('app.name'))

@section('content')

<div class="mt-6 mb-6">
<h1 class="text-center">{{ $album->title }}</h1>
</div>
<hr>

<div class="row">
{{-- @foreach ($albums as $album)
  <div class="col-sm">
    <a class="nav-link" href="{!! url("album/{$album->id}/"); !!}">
      <div class="row">
        <div class="col text-center">
          <img class="album-cover img-thumbnail" src="album_covers/{{ $album->id }}" >
        </div>
        <div class="col text-center">
          <p class="album-title">{{ $album->title }}</p>
        </div>
      </div>
    </a>
  </div>
@endforeach --}}
</div>
@endsection
