<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Project;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::orderBy('id','asc')->get();

        return view ('pages.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $projects = Project::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();

        return view ('pages.products.create',['projects'=>$projects],['categories'=>$categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'category_id' => 'required',
            'project_id' => 'required',
            'name' => 'required',
            'details' => 'required',
        ]);

        $product = new Product();

        $product->category_id = $request->category_id;
        $product->project_id = $request->project_id;
        $product->name = $request->name;
        $product->details = $request->details;

        $product->save();


        return redirect('products')->with('status','Product added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('pages.products.show', ['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //

        $projects = Project::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();

        return view ('pages.products.edit',['projects'=>$projects,'categories'=>$categories,'product'=>$product]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //

        $this->validate($request, [
            'category_id' => 'required',
            'project_id' => 'required',
            'name' => 'required',
            'details' => 'required',
        ]);

        $product->category_id = $request->category_id;
        $product->project_id = $request->project_id;
        $product->name = $request->name;
        $product->details = $request->details;

        $product->save();

        return redirect('products')->with('status', 'Product edited successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product -> delete();

        return redirect ('products')->with('status','Product deleted successfully');
    }
}
