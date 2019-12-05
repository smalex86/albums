@extends('layouts.app')

@section('css')
<link href="/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
@endsection

@section('scripts')
<script type="text/javascript" src="/js/jquery.nanogallery2.min.js"></script>
@endsection

@section('title', config('app.name'))

@section('content')

<div class="mt-4 mb-4">
<h1 class="text-center">{{ $album->title }}</h1>
</div>
<hr>

@php
    $photos = $album->photos
@endphp
@if (count($photos) > 0)

    <div id="photoGallery">
    @foreach ($photos as $photo)
        <a href="{!! url("/shows/{$album->id}/{$photo->guid}"); !!}"
            data-ngthumb="{!! url("/thumbs/{$album->id}/{$photo->guid}"); !!}"
            data-ngdownloadurl="{!! url("/originals/{$album->id}/{$photo->guid}"); !!}"
            data-ngdesc="">{{ $photo->name }}</a>
    @endforeach
    </div>
@else
    <p>В альбоме нет фотографий :(</p>
@endif
<hr>

<script>
jQuery(document).ready(function () {
  var downloadOriginal = function(customElementName, $customIcon, item) {

  }

  jQuery("#photoGallery").nanogallery2({
    itemsBaseURL: '{{ url("/") }}',
    thumbnailLabel: { display: false },
    thumbnailWidth: 'auto',
    thumbnailHeight: 200,
    thumbnailBorderVertical: 0,
    thumbnailBorderHorizontal: 0,
    thumbnailHoverEffect2: 'imageScaleIn80|imageSepiaOff|labelAppear75',
    thumbnailAlignment: 'center',
    viewerDownload: '<i class="nGY2Icon-ngy2_download2"></i> Скачать оригинал',
    viewerToolbar: {
      standard: 'shareButton, fullscreenButton, downloadButton',
      minimized: ''
    },
    viewerTools: {
      topLeft: 'label',
      topRight: 'playPauseButton, zoomButton, fullscreenButton, closeButton'
    },
    icons: { viewerCustomTool1: '<i class="nGY2Icon-ngy2_download2"></i> Скачать оригинал' },
    fnImgToolbarCustClick: downloadOriginal
  });
});
</script>

@endsection
