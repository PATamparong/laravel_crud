<?php

namespace App\Http\Controllers;
use App\model\Human;
use Illuminate\Http\Request;

class humanController extends Controller
{
    function create(){
        $human = Human::all();
        return view('layout', compact('human'));
    }
    function back(){
        return view('base');
    }
    //insert
    function insert(Request $request){
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ]);
        $user = new Human($request->all());
        $user->save();
        return $this->create();
       
    }
    //function store
    function store(Request $request){
        
    }
    //delete
    function delete($id){
        $userDel = Human::find($id);
        $userDel->delete();
        return $this->create();
    }
    //find
    function find(Request $request){
        $userUp = Human::find($request->id); 
        return view('edit',compact('userUp'));
    }
    //update
    function update(Request $request){
        $userUp = Human::find($request->id); 
        $userUp->firstname=$request->input('firstname');
        $userUp->middlename=$request->input('middlename');
        $userUp->lastname=$request->input('lastname');
        $userUp->email=$request->input('email');
        $userUp->age=$request->input('age');
        $userUp->gender=$request->input('gender');
        $userUp->address=$request->input('address');
    $userUp->save();
    return $this->create();
    }
    //view
    function view($id){
        $userView =  Human::find($id);
        return $this->create();  

    }
}
