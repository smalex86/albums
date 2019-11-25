@extends('layouts.app')

@section('title', config('app.name'))

@section('content')

<div class="mt-6 mb-6">
<h1 class="text-center">{{ $album->title }}</h1>
</div>
<hr>

<div class="row">
Здесь должен быть список фотографий
</div>
@endsection
