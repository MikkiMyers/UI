<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Scalar\Float_;
use Psr\Http\Message\ServerRequestInterface;

class MultiController extends Controller
{
    function showForm(): View {
        return view('mul-form');
        }
    function showResult(ServerRequestInterface $request): View
    {
        $data = $request->getParsedBody();
        
        if (!isset($data['number'])) {
            
            return redirect()->back()->withErrors('Please select a number.');
        }
        $number = (int) $data['number']; 
        if ($number < 2 || $number > 12) {
            
            return redirect()->back()->withErrors('Please select a number between 2 and 12.');
        }
        $multiplicationTable = [];
    
      
        for ($k = 2; $k <= $number; $k++) {
            $table = [];
            for ($j = 1; $j <= 12; $j++) {
                $table[] = [
                    'multiplier' => $k,
                    'multiplicand' => $j,
                    'result' => $k * $j,
                ];
            }
            $multiplicationTable[] = $table;
        }
    
      
        return view('mul-result', [
            'number' => $number,
            'multiplicationTable' => $multiplicationTable,
        ]);
    }
}    