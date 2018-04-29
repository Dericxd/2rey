<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\History;
use App\Detail;
use App\Product;
use App\Store;
use App\Moviment;
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
            $user = Auth::user();
            $pdf = PDF::loadView('user.products.pdf', compact('products', 'user'));

            return $pdf->download('listado.pdf');
            }

}
