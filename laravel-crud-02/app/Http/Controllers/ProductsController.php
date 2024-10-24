<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    //This method will show products page
    public function index() {

    }

    //This method will show create product page 
    public function create() {
        return view('products.create');
    }

    //This method will store a product in Database
    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|min:3'
        ]);

        if($validator->fails()){
            return redirect()->route('product.create')->withInput()->withErrors($validator);
        }
    }

    //This method will show edit product page 
    public function edit() {
        
    }
}
