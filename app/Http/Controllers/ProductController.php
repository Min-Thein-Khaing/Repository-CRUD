<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $productRepository;

     public function __construct(ProductRepository $productRepository)
     {
        $this->productRepository = $productRepository;

     }
    public function index()
    {
        $products = $this->productRepository->all();
        return view("product.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->productRepository->create([
            "name"=>$request->name,
            "price"=>$request->price,
            "stock"=>$request->stock,
            "description"=>$request->description
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product=$this->productRepository->find($product->id);
        return view("product.detail",compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
       $product= $this->productRepository->find($product->id);
        return view("product.edit",compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->productRepository->update($product->id,[
            "name"=>$request->name,
            "price"=>$request->price,
            "stock"=>$request->stock,
            "description"=>$request->description
        ]);
        return Redirect()->route("product.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->productRepository->delete($product->id);
        return back();
    }
}
