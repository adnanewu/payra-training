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
    public function store(Request $req)
    {
    	$input=$req->all();
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
    public function updateData(Request $req,$id)
    {
        $input=$req->all();
        $data=stud::where('id',$id)->first();
        $data->update($input);
        return redirect('ListData');
    }
}
