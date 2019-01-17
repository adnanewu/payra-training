<?php

namespace App\Http\Controllers;
use App\stud;

use Illuminate\Http\Request;

class Demo extends Controller
{
   public function index()
    {
    	return view('index');
    }
    public function store(Request $request)
    {
        
       $this->validate($request,[
        'house_hold_name'=>'required|min:10',
        'father_name'=>'required|max:10',
        'gender'=>'required|max:8']);

        $input=$request->all();
    	stud::create($input);
        return redirect('/')->with('msg','Insert Data Successfully');
       

      
    }



    
    public function create()
    {
    	$data=stud::get();
    	return view('listdata',compact('data'));
    }
    public function show($id)
    {
        $data=stud::where('id',$id)->first();
        $data->delete();
        return redirect('ListData');
    }
    public function edit($id)
    {
        $data=stud::where('id',$id)->first();
        return view('studedit',compact('data'));

    }
    public function updateData(Request $request,$id)
    {
        
        
         
         $input=$request->all();
         $data=stud::where('id',$id)->first();
         $data->update($input);
         return redirect('ListData');
         $this->validate($request,[
        'house_hold_name'=>'required|min:10',
        'father_name'=>'required|max:10',
        'gender'=>'required|max:8']);
    }
}
