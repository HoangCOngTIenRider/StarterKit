<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index(){
        $data=Student::all();

        return view('body',compact('data'));
    }
    public function create(Request $request){
        //sử lý nếu là post
        if($request->post()){
            // dd($request->all());
            $data= new Student();
            $data->name=$request->name;
            $data->tuoi=$request->tuoi;
            $data->save();
        }

        return view('student.create');
    }
    public function update(Request $request,$id){
        $data=Student::find($id);

        if($request->post()){
            $data->name=$request->name;
            $data->tuoi=$request->tuoi;
            $data->save();
        }
        return view('student.update',compact('data'));
    }
    public function delete($id){
        $data=Student::find($id);
        if($data){
            $data->delete();
        }
    }
}
