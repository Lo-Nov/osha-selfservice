<?php

namespace App\Http\Controllers;
use PDF;


use Illuminate\Http\Request;

class PDFGeneratorController extends Controller
{
    //

    public function generatePDF()
    {
    	$pdf = PDF::loadView('pdf.house-receipt', $data);
		return $pdf->download('invoice.pdf');
    }
}
