<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        // $data=Test::get();
        $data=DB::table('tests')->get();
        return view('test', compact('data'));
    }
    public function create(Request $request ){
        if($request->post()){
            // return view('add');
            // dd($request->all());
            $test=new Test();
            $test->name=$request->name;
            $test->status=$request->status;
            $test->save();
            return redirect(route('index'));
        }
        return view('create');
    }
    public function update(Request $request,$id){
        $data=Test::find($id);
        if($request->post()){
            $data->name=$request->name;
            $data->status=$request->status;
            $data->save();
            return redirect(route('index'));
        }
        return view('update' , compact('data'));
    }
    public function delete($id){
        $data=Test::find($id);
        $data->delete();
        return redirect(route('index'));
    }
    
}
