<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //
    public function index(){
        $subcategory=SubCategory::all();

        return view('sub_category.allsub_category',compact('subcategory',$subcategory));
    }

    public function create(){

       $category=Category::all();

        return view('sub_category.addsub_category',compact('category',$category));
    }
    public function store(Request $request){
        $this->validate($request,[
            'category_id'=>'required|string',
            'name'=>'required|string',
            'description'=>'required|string',
            'status'=>'nullable',
            'image'=>'image|nullable|max:1999'
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
            $path=$request->file('image')->storeAs('public/subcategory',$fileNameToStore);

           }

        $subcategory =new SubCategory();
        $subcategory->category_id=$request->input('category_id');
        $subcategory->name=$request->input('name');
        $subcategory->description=$request->input('description');
        $subcategory->status=$request->status==true?'1':'0';
        $subcategory->image=$fileNameToStore;

        $subcategory->save();

        notify()->success('Sub_Category is Added !');
        return redirect('admin/subcategories');
    }

    public function edit($subcategory_id){

     $category=Category::all();
     $subcategory=SubCategory::find($subcategory_id);

     return view('sub_category.editsub_category',compact('subcategory',$subcategory),compact('category',$category));
    }


    public function update(Request $request){

        $this->validate($request,[
            'category_id'=>'required|string',
            'name'=>'required|string',
            'description'=>'required|string',
            'status'=>'nullable',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1999'
        ]);

        $subcategory=SubCategory::find($request->input('id'));
        $subcategory->category_id=$request->input('category_id');
        $subcategory->name=$request->input('name');
        $subcategory->description=$request->input('description');
        $subcategory->status=$request->status==true?'1':'0';

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
            $path=$request->file('image')->storeAs('public/subcategory',$fileNameToStore);
            if ($subcategory->image) {
                Storage::delete('public/subcategory/'.$subcategory->image);
              }
    
           }
       
        $subcategory->image=$fileNameToStore;

        $subcategory->update();

        notify()->warning('Sub_Category is Updated !');
        return redirect('admin/subcategories');


    }


    public function destory($subcategory_id){
        $subcategories=SubCategory::find($subcategory_id);
        if($subcategories->image){
            Storage::delete('public/subcategory/'.$subcategories->image);
        }
        $subcategories->delete();

        notify()->warning('Sub_Category is Deleted !');
        return redirect('admin/subcategories');
    }

    public function active($subcategory_id){

        $subcategory=SubCategory::find($subcategory_id);
        $subcategory->status=1;
        $subcategory->update();
        notify()->warning('Sub Category Status is !','Inactive');
       
        return redirect('admin/subcategories');
    }
    public function inactive($subcategory_id){

        $subcategory=SubCategory::find($subcategory_id);
        $subcategory->status=0;
        $subcategory->update();
        notify()->success('Sub Category Status is !','Active');
        return redirect('admin/subcategories');
    }



}
