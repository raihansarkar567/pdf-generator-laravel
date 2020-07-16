<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function export_pdf()
  {
    // Fetch all customers from database
    $data = Customer::get();
    // Send data to the view using loadView function of PDF facade
    $pdf = \PDF::loadView('pdf_view', $data);
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('customers.pdf');
  }

  public function printPDF(){
    $data = [
        'title' => 'First PDF for Medium',
        'heading' => 'Hello from 99Points.info',
        'content' => 'Lorem Ipsum is simply dummy text of the printing and . Lorem Ipsum has been the industry'
          ];
        $pdf = PDF::loadView('pdf_view', $data);
        return $pdf->download('medium.pdf');
  }
}
