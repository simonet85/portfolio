<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'email'=>'required|email|unique:contacts',
            'projet'=>'required',
            'message'=>'required',
            'numero'=>'nullable'
        ]);
        
        //Saving data
        $contact = Contact::create([
            'nom'=>$request->name,
            'projet'=>$request->projet,
            'email'=>$request->email,
            'numero'=>$request->numero,
            'message'=>$request->message,
            
        ]);
        //Display flash Message
        Session::flash('success', 'Informations envoyées avec succès');
        // return back to products/create
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
           'nom' =>'required',
           'projet' => 'required',
           'email' => 'required|email',
           'numero' => 'nullable',
           'message' => 'required',

       ]);
       $contact = Contact::find($id);
       
        //Update fields
        $contact->update([
            'nom' => $request->nom,
            'projet' => $request->projet,
            'email' => $request->email,
            'message' => $request->message,
            'numero'=>$request->numero,
        ]);

        //Store message in session
        session()->flash('info','Message modifié avec succès.');
        
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);
       
        session()->flash('info', 'Contact supprimé avec succès');
        return redirect()->back();

    }
}
