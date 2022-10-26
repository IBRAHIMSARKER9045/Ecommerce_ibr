<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;

class AdminController extends Controller
{
    //
    public function view_catagory(){
        $data = Catagory::all();
        return view('admin.view_catagory', compact('data'));
    }
    public function add_catagory(Request $request){
        $data =new Catagory;
        $data->catagory_name=$request->catagory;
        $data->save();
        return redirect()->back()->with('message','Catagory Added Successfully');


    }
}
