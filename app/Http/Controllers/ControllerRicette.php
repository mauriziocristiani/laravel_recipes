<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ControllerRicette extends Controller
{

public function Show(){
    
    return view('show');
}



public function showNewForm(){
    
    return view('new_form');
}


public function Store(Request $request ){
    
    $this->validate($request,[  'titolo'=>'required', 'descrizione'=>'required','ingredieuno'=>'required','ingrediedue'=>'required','ingredietre'=>'required']);
    $date=$request->all();
   \App\Recipe::create($date);
    return redirect()->route('home');
}




  
 
public function showList(){
    $ricette = \App\Recipe::all();
    return view('list_ricette',['ricette'=>$ricette]);
}
    

public function showSingle($id){
    $ricette = \App\Recipe::findOrFail($id);
    return view('list_ricetta',['ricette'=>$ricette]);
}

public function showEditForm($id){
    $ricette = \App\Recipe::findOrFail($id);
    return view('edit_form',['ricette'=>$ricette]);
}



public function edit(Request $request, $id ){
    
        $ricette = \App\Recipe::findOrFail($id);
        $this->validate($request,[  'titolo'=>'required', 'descrizione'=>'required','ingredieuno'=>'required','ingrediedue'=>'required','ingredietre'=>'required' ]);
        $date=$request->all();
        $ricette->fill($date); 
        $ricette->save();
        return redirect()->route('ricette.single',['id'=>$ricette->id]);
}


public function deleteSingle($id){
       $ricette = \App\Recipe::findOrFail($id);
       $ricette->delete();

        // redirect
        
        return redirect()->route('home');

}

        
}




