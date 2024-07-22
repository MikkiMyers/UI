@extends('layouts.main')

@section('title','Payment: Form')

@section('content')

<main>
    <body>
    <form action="{{ route('payment-result') }}" method="post">
        @csrf
        <label for="price"><b>Price <span style="color: blue;">::</span></b></label>
    <input type="number" id="price" name="price" value="0" min="0" > <br><br>

    <input type="checkbox" id="hasVat" name="hasVat" value="1">
    <label for="hasVat"><b>Has VAT <span style="color: blue;">::</span></b></label>
    

    <label id="vatOptions" >
        <label for="vatIncludedInPrice">VAT Included in Price</label>
        <input type="radio" id="vatIncluded" name="vatIncludedInPrice" value="1" checked>
        <label for="vatIncluded">Included</label>
        <input type="radio" id="vatExcluded" name="vatIncludedInPrice" value="0">
        <label for="vatExcluded">Excluded</label><br>
    </label><br>


    <input type="checkbox" id="hasTax" name="hasTax" value="1">
    <label for="hasTax"><b>Has Tax <span style="color: blue;">::</span></b></label>
    

    <label id="taxOptions" >
        <input type="radio" id="tax5" name="taxPercentage" value="5">
        <label for="tax5">5%</label>
        <input type="radio" id="tax3" name="taxPercentage" value="3" checked>
        <label for="tax3">3%</label>
        <input type="radio" id="tax2" name="taxPercentage" value="2">
        <label for="tax2">2%</label>
        <input type="radio" id="tax1" name="taxPercentage" value="1">
        <label for="tax1">1%</label><br>
    </label>
    <br><br>
    
     
        <button type="submit">Submit</button>
       
    </form>
</body>
</main>
@endsection