@extends('layouts.main')

@section('title','Payment Result')

@section('content')

<main>
    
    <table class="app-cmp-data-list">
        <tr>
            <td><b>Price excluding VAT <span style="color: blue;">::</span></span> </b></td>
               <td> {{ number_format((float) $priceExcludeVat, 2) }}  </td>
        </tr>
        
            @if ($message === '')
                <tr>
                    <td><b>VAT Cost (7%) <span style="color: blue;">::</span> </b></td>
                    <td>  {{ number_format((float) $vatCost, 2) }} </td>
                </tr>
                <tr>
                    <td><b>Payment including VAT <span style="color: blue;">::</span> </b></td>
                    <td><b><span class="double-underline">{{ number_format((float) $priceIncludeVat, 2) }}</span></b></td>
                </tr>
                <tr>
                    <td><b>Tax Cost&#40;{{ $taxPercentage }}%&#41; <span style="color: blue;">::</span> </b></td>
                    <td>{{ number_format($taxCost, 2) }}</td>
                </tr>
            @endif

            @if ($message === 'No Tax')
                <tr>
                    <td><b>VAT Cost (7%) <span style="color: blue;">::</span> </b></td>
                    <td>{{ number_format((float) $vatCost, 2) }} </td>
                </tr>

                <tr>
                    <td><b>Payment including VAT <span style="color: blue;">::</span></b></td>
                    <td><b><span class="double-underline">{{ number_format((float) $priceIncludeVat, 2) }}</span></b></td>
                </tr>   
            @endif

            @if (!empty($message))
                <tr>
                    <td></td>
                    <td><em>{!! nl2br(e($message)) !!}</em></td>
                </tr>
            @endif        

            @if ($message === 'No Vat')
            
            <tr>
                <td><b>Tax Cost&#40;{{ $taxPercentage }}%&#41; <span style="color: blue;">::</span> </b></td>
            
                <td>{{ number_format($taxCost, 2) }}</td>
            </tr>
            @endif

            
            <tr>
                <td><b>Payment <span style="color: blue;">::</span> </b></td>
            
                <td><b><span class="double-underline">{{ number_format((float) $payment, 2) }}</span></b></td>
            </tr>

    </table> 
    <br>
    <button class="back-button" onclick="window.location.href='/payment'">Back</button>
</main>
@endsection