<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class CalculationController extends Controller
{
    function showForm(): View {
        return view('example-01-form');
        }
    function showResult(ServerRequestInterface $request): View
    {
        $data = $request->getParsedBody();
        $price = (float) $data['price'];
        $discount = (float) $data['discount'];
        $discountCost = $price * ($discount/100);
        $netPrice = $price - $discountCost;

        return view('example-01-result',[
            'price'=> $price,
            'discount'=> $discount,
            'discountCost'=> $discountCost,
            'netPrice'=> $netPrice,
        ]);
    }
}