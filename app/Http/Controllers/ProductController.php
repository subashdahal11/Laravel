<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view("products.index", ['products' => $products]);
    }

    public function create()
    {
        return view("products.create");
    }


    // public function store()
    // {
    //     return view("products.create");
    // }

    public function store(Request $request)
    {
      $data= $request->validate([
        'name'=> 'required',
        'qty'=> 'required',
        'price'=> 'required',
        'description'=> 'required',
      ]);
      
      $newproduct = Product::create($data);

      return redirect(route('products.create'));

    }


    public function edit(Product $product)
    {
      // dd($product); 

      return view('products.edit',['product'=> $product]);

    }

    public function update(Product $product,Request $request)
    {
      // dd($product); 

      {
        $data= $request->validate([
          'name'=> 'required',
          'qty'=> 'required|numeric',
          'price'=> 'required|decimal:2',
          'description'=> 'required',
        ]);
        
        
        $product -> update($data);
  
        return redirect(route('products.index'))-> with('success','Product Updated Sucessfully');

    }
    
  }
    public function delete(Product $product)
    {
      // dd($product); 
        $product -> delete();  
        return redirect(route('products.index'))-> with('success','Product deleted Sucessfully');

  }
}

