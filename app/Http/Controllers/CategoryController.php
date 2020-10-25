<?php

namespace App\Http\Controllers;

use App\Category;
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
        return view('admin.categories.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.posts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
    //    dd($request->all());
        $this->validate($request, [
            'name' => 'required',
        ]);

       $article = Category::find($id);
   
        //Update fields
        $article->update([
            'name' => $request->name,
        ]);

        //Store message in session
        session()->flash('success','Category updated successfully.');
        
        return redirect()->route('categories.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name"=>"required"
        ]);

        Category::create([
            "name"=>$request->input('name')
        ]);

        session()->flash('success', 'Category successfully created');
        return  redirect('categories');


    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        session()->flash('suucess','Category deleted successfully');
        return redirect()->route('categories.index');
    } 
}
