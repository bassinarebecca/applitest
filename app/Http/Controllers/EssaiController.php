<?php

namespace App\Http\Controllers;

use App\Essai;
use Illuminate\Http\Request;

class EssaiController extends Controller
{
    public function index()
    {
        $essais = Essai::all();

        return view('index',compact('essais'));
    } 

    public function create()
     {  

        return view('create');

     }
    

   
    public function store(Request $request) {

        $request->validate([
             'nom' => 'required',
             'email' => 'required|unique:essais',
         ]);
 
         Essai::create($request->all());
 
        return redirect()->route('index');
}


public function edit(Essai $essai, int $id)
    {
        $essai=Essai::find($id);
        $essai=Essai::all();
        return view('edit',compact('essai'));
    } 
    public function update(Request $request, Essai $essai)
    {
        $request->validate([
            'nom'=>'required',
            'email'=> 'required',

        ]);
    $essai  = ['update($request->all())'];

        return redirect()->route('index')
        ->with('success','essai deleted successfully');    
    }
    
    
        public function destroy(Essai $essai) {
        $essai = Essai::findOrFail();

        $essai->delete();

        return redirect()->route('index')
                        ->with('success','deleted successfully');
    }
}