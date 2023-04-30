<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    // function to display preview
    public function preview()
    {
        return view('frontend.preview');
    }

    public function generatePDF()
    {
        $pdf = PDF::loadView('frontend.preview');  
        return $pdf->download('my.pdf');
    }
}
