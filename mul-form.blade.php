@extends('layouts.main')
@section('title', 'Multiplication-Form')
@section('content')
<main>
    <form method="POST" action="{{ route('mul-result') }}">
        @csrf
        <label for="number"><b>Select a number (2-12)<span style="color: blue;">::</span><b></label>
        <select align="center" id="number" name="number" style="width: 300px; font-size: 16px;" required>
            @for ($i = 2; $i <= 12; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select><br>
        <br></br>
        <button type="submit" style="font-size: 16px" >Generate Multiplication Table</button>
    </form>
</main>
@endsection