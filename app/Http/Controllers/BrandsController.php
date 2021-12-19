<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands= brand::get();
        return view('brands/brandsall',compact('brands'));
    }
    public function create(){
        return view ('brands/createbrand');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:6',
            'description'=>'required|min:5'
        ]);
      brand::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        session()->flash('done','Added successfully !');
        return redirect(route('all.brands'));
      
    }
    public function delete(Request $request){
           $brand = brand::where('id',$request->brandId)->first();
           $brand->delete();
           session()->flash('done','Deleted Successfully !');
           return redirect(route('all.brands'));
    }
    
    public function edit(Request $request){
        $brand = brand::find($request->brandId);
        
        return view('brands/editbrand',compact('brand'));
    }
    public function update(Request $request){
        $brand =brand::find($request->brandId);
          
        $brand->name= $request->name;
        $brand->description=$request->description;
        $brand->save();
        session()->flash('done','updated Successfully !');
        return redirect(route('all.brands'));

    }
}
