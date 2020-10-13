<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index')->with('experiences', $experiences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experiences.posts');
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
            'year'=>'required',
            'titre'=>'required',
            'stack'=>'required',
            'description'=>'required',
            'imagefile'=>'image|required'
        ]);
        
        // Uploading Image
        $image = $request->imagefile;
        $new_image = $image->getClientOriginalName();
        $image->move('assets/uploads', $new_image);
        //Saving data
        $exp = Experience::create([
            'year'=>$request->year,
            'tasks'=>$request->titre,
            'stack'=>$request->stack,
            'description'=>$request->description,
            'image'=>$request->imagefile->getClientOriginalName(),
            
        ]);
        //Display flash Message
        Session::flash('success', 'Expérience Ajoutée avec succès');
        // return back to products/create
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $exp = Experience::find($id);
        return view('admin.experiences.edit')->with('exp', $exp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
    //    dd($request->all());
        $request->validate( [
            'year'=>'required',
            'tasks'=>'required',
            'stack'=>'required',
            'description'=>'required',
            // 'image_file'=>'image|required'
        ]);

       $exp = Experience::find($id);

       if ($request->hasFile('image_file') ) {

           if (file_exists(public_path('assets/uploads/').$exp->image_file)) {
               @unlink(public_path('assets/uploads/').$exp->image_file);
           }
            //Upload the new image  
            $exp_image = $request->image_file;
            //Moving image in the uploads file
            $exp_image->move('assets/uploads', $exp_image->getClientOriginalName());
            //Save the image in the DB
            $exp->image = $request->image_file->getClientOriginalName();
       }
         
        //Update fields
        $exp->update([
            'year'=>$request->year,
            'tasks'=>$request->tasks,
            'stack'=>$request->stack,
            'description'=>$request->description,
            'image'=>$request->image_file->getClientOriginalName(),
        ]);

        //Store message in session
        session()->flash('info','Expérience modifié avec succès.');
        
        return redirect()->route('experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $exp = Experience::destroy($id);

        // if (file_exists(public_path('assets/uploads/').$exp->image->getClientOriginalName())) {
        //     @unlink(public_path('assets/uploads/').$exp->image->getClientOriginalName());
        // }

        session()->flash('info', 'Experience supprimé avec succès !');
        return redirect()->route('experiences.index');

    }
}
