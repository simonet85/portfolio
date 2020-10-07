<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $articles = Article::all();
        return view('admin.articles.index')->with('articles', $articles);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.posts')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name'=>'required',
            'category_id'=>'required',
            'description'=>'required',
            'image_file'=>'image|required'
        ]);
        
        // Uploading Image
        $image = $request->image_file;
        $new_image = $image->getClientOriginalName();
        $image->move('assets/uploads', $new_image);
        //Saving data
        $article = Article::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$request->image_file->getClientOriginalName(),
            'category_id'=>$request->category_id,
        ]);
        //Display flash Message
        Session::flash('success', 'Article Ajouter avec succès');
        // return back to products/create
        return redirect()->back();
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.articles.edit')->with('article', $article);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required|numeric',
            'description' => 'required',
            // 'image_file'=>'image|required'
        ]);

       $article = Article::find($id);

       if ($request->hasFile('image_file') ) {
           if (file_exists(public_path('assets/uploads/').$article->image_file)) {
               @unlink(public_path('assets/uploads/').$article->image_file);
           }
            //Upload the new image  
            $article_image = $request->image_file;
            //Moving image in the uploads file
            $article_image->move('assets/uploads', $article_image->getClientOriginalName());
            //Save the image in the DB
            $article->image = $request->image_file->getClientOriginalName();
       }
        
        //Update fields
        $article->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image'=>$request->image->getClientOriginalName(),
        ]);

        //Store message in session
        Session::flash('success','Product updated successfully.');
        
        return redirect()->route('articles.index');
    }


    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('admin.articles.details')->with('article', $article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
