<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\DB;



class ProductsController extends Controller
{
      /**
     * get all products from data and paginate it
     * 
     * 
     */
    public function index(Request $request)
    {
    
      $query = Products::orderBy('created_at','desc');
     
      if($request->name){
          // This will only execute if you received any keyword
          $name = $request->name;
          $query = $query->where('name','like',"%$name%");
      }

      if($request->min_price && $request->max_price){
          // This will only execute if you received any price
          // Make you you validated the min and max price properly
          $query = $query->where('price','>=',$request->min_price);
          $query = $query->where('price','<=',$request->max_price);
      }

      if($request->category){
        //this will only execute if received any category
        $query = $query->where('categories',$request->category);
      }

      $products = $query->paginate(20);
      return response()->json($products);
    }

}
