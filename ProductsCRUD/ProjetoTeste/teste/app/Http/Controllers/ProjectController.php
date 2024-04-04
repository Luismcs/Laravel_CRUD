<?php

namespace App\Http\Controllers;

use App\Product;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::orderBy('id','asc')->get();

        return view ('pages.projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('pages.projects.create');

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

        Project::create($request -> all());

        return redirect('projects')->with('status','Project added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        $products = Product::orderBy('id','asc')->get();


        return view('pages.projects.show', ['project' => $project,'products'=>$products]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $products = Product::orderBy('id','asc')->get();

        return view ('pages.projects.edit',['project'=>$project,'products'=>$products]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);

        $project->name = $request->name;

        $project->save();


        $selectedProductIds = $request->product_id ?? [];

        foreach ($selectedProductIds as $productId) {
            $product = Product::find($productId);
            if ($product) {
                $product->project_id = $project->id;
                $product->save();
            }
        }

        return redirect('projects')->with('status','Project edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project -> delete();

        return redirect ('projects')->with('status','Project deleted successfully');
    }
}
