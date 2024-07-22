<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Scalar\Float_;
use Psr\Http\Message\ServerRequestInterface;

class PaymentController extends Controller
{
    function showForm(): View {
        return view('payment-form');
        }
    function showResult(ServerRequestInterface $request): View
    {
        $data = $request->getParsedBody();
        $price = (float) $data['price'];
        $priceExcludeVat = $price; 
        $taxPercentage = (float) $data['taxPercentage'];
    
        
        $taxCost = 0;
        if (isset($data['hasTax'])) {
            $taxPercentage = (float) $data['taxPercentage'];
            if (isset($data['hasVat']) && $data['hasVat'] === '1') {
               
                $priceIncludeVat = $price; 
                $taxCost = $priceIncludeVat * (100 / 107) * ($taxPercentage / 100);
            } else {
               
                $taxCost = $price * ($taxPercentage / 100);
            }
        }
    
       
        $vatCost = 0;
        if (isset($data['hasVat'])) {
            $vatOption = $data['vatIncludedInPrice'];
            if ($vatOption === '1') {
             
                $priceExcludeVat = $price * (100 / 107);
               
                $vatCost = $price - $priceExcludeVat;
         
                if (isset($data['hasTax'])) {
                    $taxPercentage = (float) $data['taxPercentage'];
                    $taxCost = $price * (100 / 107) * ($taxPercentage / 100);
                }
            } else {
               
                $priceExcludeVat = $price;
                $vatCost = $price * (7 / 100);
                if (isset($data['hasTax'])) {
                    $taxPercentage = (float) $data['taxPercentage'];
                    $taxCost = $price * ($taxPercentage / 100);
                }
            }
        }
    
     
        $priceIncludeVat = $priceExcludeVat + $vatCost;
    
        $message = '';
        if (!isset($data['hasTax']) && !isset($data['hasVat'])) {
            $message = "No Tax\nNo Vat";
        } elseif (!isset($data['hasTax'])) {
            $message = 'No Tax';
        } elseif (!isset($data['hasVat'])) {
            $message = 'No Vat';
        }
    
      
        if (isset($data['hasTax']) && isset($data['hasVat'])) {
       
            $payment = $priceIncludeVat - $taxCost;
        } elseif (!isset($data['hasTax']) && isset($data['hasVat'])) {
            
            $payment = $priceIncludeVat;
        } elseif (isset($data['hasTax']) && !isset($data['hasVat'])) {
            
            $payment = $priceExcludeVat - $taxCost;
        } else {
          
            $payment = $priceExcludeVat + $taxCost;
        }
    

         // Return or save the results as needed
        return view('payment-result', [
            'price' => $price,
            'priceExcludeVat' => $priceExcludeVat,
            'priceIncludeVat' => $priceIncludeVat,
            'vatCost' => $vatCost,
            'taxCost' => $taxCost,
            'payment' => $payment, 
            'message' => $message,
            'taxPercentage' => $taxPercentage,
        ]);
    }
    
 }

