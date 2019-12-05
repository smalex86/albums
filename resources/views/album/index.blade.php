@extends('layouts.app')

@section('title', config('app.name'))

{{-- @section('sidebar')
  @parent

  <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')

<div class="mt-6 mb-6">
  <p class="text-center mb-1 h3">25.10.2019</p>
  <h1 class="text-center"><strong>Фотоальбомы</strong></h1>
</div>
<hr>

{{-- <a href='{!! url('/about'); !!}'>About</a> --}}

<div class="row">
@foreach ($albums as $album)
  <div class="col-sm">
    <a class="nav-link" href="{!! url("album/{$album->id}/"); !!}">
      <div class="row">
        <div class="col text-center">
          <img class="album-cover img-thumbnail" src="covers/{{ $album->id }}" >
        </div>
        <div class="col">
          <p class="album-title">{{ $album->title }} ({{ $album->photos()->count() }} фото)</p>
        </div>
      </div>
    </a>
  </div>
@endforeach
</div>
<hr>

@endsection
