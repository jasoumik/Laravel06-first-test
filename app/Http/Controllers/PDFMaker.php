<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\App as FacadesApp;

class PDFMaker extends Controller
{
    //
    function generate(){
        $pdf = FacadesApp::make('dompdf.wrapper');
        $data="<h1>Hello Pdf test 123</h1>";
        $pdf->loadHTML($data);
        return $pdf->stream();
    }
}
