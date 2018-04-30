<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pdf()
    {
        $products = Product::all();
        $view     = \View::make('user.products.pdf', compact('products'))->render();
        $pdf      = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('listado.pdf');
    }

    public function productPrint(Product $product)
    {
        $view = \View::make('user.products.pdfs.show', compact('product'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('listado.pdf');
    }

}
