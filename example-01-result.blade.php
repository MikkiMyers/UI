@extends('layouts.main')

@section('title','Example 01: Result')

@section('content')

<main>
    <dl class="app-cmp-data-detail">
        <dt>Price</dt>
        <dd>{{ number_format((float)$price ,2)}}</dd>

        <dt>Discount</dt>
        <dd>{{ number_format((float)$discount ,2)}}</dd>

        <dt>Discount Cost</dt>
        <dd>{{ number_format((float)$discountCost ,2)}}</dd>

        <dt>Net Price</dt>
        <dd>{{ number_format((float)$netPrice ,2)}}</dd>
</main>
<button class="back-button" onclick="window.location.href='/example-01'">Back</button>
@endsection