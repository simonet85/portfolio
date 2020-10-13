<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edu = Education::all();
        return view('admin.education.index')->with('edu', $edu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.education.posts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'year'=>'required',
            'diploma'=>'required',
            'school'=>'required',
            'description'=>'required',
            // 'imagefile'=>'image|required'
        ]);
        
        // Uploading Image
        $image = $request->imagefile;
        $new_image = $image->getClientOriginalName();
        $image->move('assets/uploads', $new_image);
        //Saving data
        $exp = Education::create([
            'school'=>$request->school,
            'year'=>$request->year,
            'diploma'=>$request->diploma,
            'description'=>$request->description,
            'image'=>$request->imagefile->getClientOriginalName(),
            
        ]);
        //Display flash Message
        Session::flash('success', 'Parcour Ajouté avec succès');
        // return back to products/create
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ed = Education::find($id);
        return view('admin.education.edit')->with('ed', $ed);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exp = Education::destroy($id);

        // if (file_exists(public_path('assets/uploads/').$exp->image->getClientOriginalName())) {
        //     @unlink(public_path('assets/uploads/').$exp->image->getClientOriginalName());
        // }

        session()->flash('info', 'Education supprimé avec succès !');
        return redirect()->route('educations.index');
    }
}
