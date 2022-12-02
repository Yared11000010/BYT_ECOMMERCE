<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Brand;
use Psy\CodeCleaner\ReturnTypePass;

class BrandController extends Controller
{
    //
    public function index(){
        $brands=Brand::all();

        return view('brand.index',compact('brands',$brands));
    }


    public function create(){

        return view('brand.addbrand');
    }

    public function store(Request $request){
   
    $this->validate($request,[
      'name'=>'required|string',
      'image'=>'required|image',
      'status'=>'nullable'
    ]);
    if($request->hasFile('image')){
        //get file name with ext
        $fileNameWithExt=$request->file('image')->getClientOriginalName();
        //get just file name
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //get just file extenstion
        $extension=$request->file('image')->getClientOriginalExtension();
        //file name to store
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;

        //upload image
        $path=$request->file('image')->storeAs('public/brand',$fileNameToStore);

       }

    $brand=new Brand();
    $brand->name=$request->input('name');
    $brand->image=$fileNameToStore;
    $brand->status=$request->status==true?'1':'0';
    $brand->save();

    notify()->success('Brand is Added');

    return redirect('admin/brands');


    }
    public function edit($brand_id){

        $brand=Brand::find($brand_id);

        
        return view('brand.editbrand',compact('brand',$brand));
    }

    public function update(Request $request){

        $this->validate($request,[
            'name'=>'required|string',
            'status'=>'nullable'
          ]);
          

          $brand=Brand::find($request->input('id'));
          $brand->name=$request->input('name');
          $brand->status=$request->status==true?'1':'0';

          if($request->hasFile('image')){
            //get file name with ext
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            //get just file name
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just file extenstion
            $extension=$request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
    
            //upload image
            $path=$request->file('image')->storeAs('public/brand/',$fileNameToStore);
            if ($brand->image) {
                Storage::delete('public/brand/'.$brand->image);
              }
              $brand->image=$fileNameToStore;

           }

          $brand->update();


          notify()->success('Brand is Updated');

          return redirect('admin/brands');
    }
    public function destory($brand_id){
        $brand=Brand::find($brand_id);
        if($brand->image){
            Storage::delete('public/brand/'.$brand->image);
        }
        $brand->delete();

        notify()->warning('Brand is Deleted !');
        return redirect('admin/brands');
    }

    public function active($brand_id){

        $brand=Brand::find($brand_id);
        $brand->status=1;
        $brand->update();
        notify()->warning('Sub Brand Status is !','Inactive');
       
        return redirect('admin/brands');
    }
    public function inactive($brand_id){

        $brand=Brand::find($brand_id);
        $brand->status=0;
        $brand->update();
        notify()->warning('Sub Brand Status is !','Active');
        return redirect('admin/brands');
    }
}
