@extends('layouts.main')

@section('title','Example 01: Form')

@section('content')
<main>
    <form action="{{ route('example-01-result') }}" method="post">
        @csrf
        <label>
            Price
            <input type="number" name="price" step="0.25"/>
        </label>
        <br/>

        <label>
            Discount (%)
            <input type="number" name="discount" step="0.01" min="0" max="100"/>
        </label>
        <br/>
        <br>
        <button type="submit">Submit</button>
    </form>
</main>
@endsection