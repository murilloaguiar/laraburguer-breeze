<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
   public function index(){
      return Inertia::render('Home/Index');
   }

   public function bag(){
      return Inertia::render('Home/Bag');
   }

   public function catalog(){
      $produtcs = Product::paginate(5);
      
      return Inertia::render('Home/Products', [
         'products' => $produtcs
      ]);
   }

   public function orders(){
      return Inertia::render('Home/Orders');
   }


}
