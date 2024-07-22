@extends('layouts.main')

@section('title','Area Result')

@section('content')

<main>
    <dl class="app-cmp-data-detail">
        <dt>Type</dt>
        <dd>{{$type}}</dd>

        <dt>Width</dt>
        <dd>{{ number_format((float)$width ,2)}}</dd>

        <dt>Height</dt>
        <dd>{{ number_format((float)$height ,2)}}</dd>

        <dt>Area</dt>
        <dd>{{ number_format((float)$area ,2)}}</dd>
    </dl>
    <button class="back-button" onclick="window.location.href='/area'">Back</button>
</main>
@endsection