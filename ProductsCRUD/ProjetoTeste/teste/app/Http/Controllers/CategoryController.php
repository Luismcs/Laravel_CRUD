<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id','asc')->get();

        return view ('pages.categories.index',['categories'=>$categories]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('pages.categories.create');
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
            'name' => 'required',
        ]);

        Category::create($request -> all());

        return redirect('categories')->with('status','Category added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $products = Product::orderBy('id','asc')->get();

        return view('pages.categories.show', ['category' => $category,'products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        $products = Product::orderBy('id','asc')->get();

        return view ('pages.categories.edit',['category'=>$category,'products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category->name = $request->name;

        $category->save();


        $selectedProductIds = $request->product_id ?? [];

        foreach ($selectedProductIds as $productId) {
            $product = Product::find($productId);
            if ($product) {
                $product->category_id = $category->id;
                $product->save();
            }
        }

        return redirect('categories')->with('status','Category edited successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category -> delete();

        return redirect ('categories')->with('status','Category deleted successfully');

    }
}
