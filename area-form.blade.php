@extends('layouts.main')

@section('title','Area : Form')

@section('content')
<main>
    <form action="{{ route('area-result') }}" method="post">
        @csrf
    <table>
        <tr>
            <td><b>Type<span style="color: blue;">::</span></b></td>
            <td colspan="2">
                <label style="margin-right: 10px;">
                    <input type="radio" name="a" value="Rectangular" style="margin-right: 5px;"/>Rectangular 
                </label>
                <label>
                    <input type="radio" name="a" value="Triangle" style="margin-right: 5px;"/>Triangle 
                </label>
            </td>
        </tr>

        
        <tr>
            <td><b>Width<span style="color: blue;">::</span></b></td>
            <td><input type="number" name="width" step="0.25" style="width: 450px" required/></td>
        </tr>
       

        <tr>
            <td><b>Height<span style="color: blue;">::</span></b></td>
            <td><input type="number" name="height" style="width: 450px" required/></td>
        </tr>
    </table>
        <br>
        <br>

        <button type="submit">Submit</button>
    </form>
</main>
@endsection