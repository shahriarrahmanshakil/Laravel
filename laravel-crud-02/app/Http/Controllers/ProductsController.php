<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    //This method will show products page
    public function index() {
        $products = Product::all(); // Correct method to fetch all products
        return view('products.index', [
            'products' => $products
        ]);
    }
    

    //This method will show create product page 
    public function create() {
        return view('products.create');
    }

    //This method will store a product in Database
    public function store(Request $request) {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|min:3'
        ];

        if ($request->hasFile('image')){
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;
        
            // Move the uploaded image to the 'Uploads/products' directory
            $image->move(public_path('uploads/products'), $imageName);
        
            // Save the image name in the database
            $product->image = $imageName;
            $product->save();
        }
        

        return redirect()->route('products.index')->with('success', 'Product added Sucessfully');
    }

    //This method will show edit product page 
    public function edit() {
        
    }
}
