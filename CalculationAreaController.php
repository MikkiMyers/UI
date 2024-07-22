<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class CalculationAreaController extends Controller
{
    function showForm(): View {
        return view('area-form');
        }
    function showResult(ServerRequestInterface $request): View
    {
        $data = $request->getParsedBody();
        $a = $data['a'];
        $w = (float) $data['width'];
        $h = (float) $data['height'];
        if($a === 'Rectangular'){
            $area = $w * $h;
        }
        else{
            $area = 0.5*$w * $h;
        }
        
       

        return view('area-result',[
            'type'=>$a,
            'width'=> $w,
            'height'=> $h,
            'area'=> $area,
            
        ]);
    }
}