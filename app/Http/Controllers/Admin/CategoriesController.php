<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Group;
use PhpParser\Node\Expr\FuncCall;

class CategoriesController extends Controller
{
    //
    public function index(){

        $categories=Category::all();
        return view('categories.allcategories',compact('categories',$categories));

    }

    public function create(){

        $groups=Group::all();

        return view('categories.addcategory')->with('groups',$groups);
    }

    public function store(Request $request){

        $this->validate($request,[
            'group_id'=>'required|string',
            'name'=>'required|string',
            'discount'=>'required|integer',
            'description'=>'required|string',
            'url'=>'required|string',
            'meta_title'=>'required|string',
            'meta_description'=>'required|string',
            'meta_keywords'=>'required|string',
            'meta_title'=>'required|string',
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
            $path=$request->file('image')->storeAs('public/category',$fileNameToStore);

           }
        $category =new Category();
        $category->group_id=$request->input('group_id');
        $category->name=$request->input('name');
        $category->discount=$request->input('discount');
        $category->description=$request->input('description');
        $category->url=$request->input('url');
        $category->meta_title=$request->input('meta_title');
        $category->meta_description=$request->input('meta_description');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_title=$request->input('meta_title');
        $category->status=$request->status==true?'1':'0';
        $category->image=$fileNameToStore;
        $category->save();
        
        notify()->success('Category is Added !');
        return redirect('admin/categories');
    }

    public function update(CategoryFormRequest $request){   
      
        $this->validate($request,[
            'group_id'=>'required|string',
            'name'=>'required|string',
            'discount'=>'required|integer',
            'description'=>'required|string',
            'url'=>'required|string',
            'meta_title'=>'required|string',
            'meta_description'=>'required|string',
            'meta_keywords'=>'required|string',
            'meta_title'=>'required|string',
            'status'=>'nullable',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1999'
        ]);
        
            $category=Category::find($request->input('id'));
            $category->group_id=$request->input('group_id');
            $category->name=$request->input('name');
            $category->discount=$request->input('discount');
            $category->description=$request->input('description');
            $category->url=$request->input('url');
            $category->meta_title=$request->input('meta_title');
            $category->meta_description=$request->input('meta_description');
            $category->meta_keywords=$request->input('meta_keywords');
            $category->meta_title=$request->input('meta_title');
              
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
            $path=$request->file('image')->storeAs('public/category',$fileNameToStore);
            if ($category->image) {
                Storage::delete('public/category/'.$category->image);
              }
    
           }

        $category->image=$fileNameToStore;
       
        $category->update();

        notify()->warning('Category is Updated !');
        return redirect('admin/categories');

    }

    public function edit($categoires_id){

      $categories=Category::find($categoires_id);
      $groups=Group::all();

      return view('categories.editcategories',compact('categories',$categories),compact('groups',$groups));

    }

    public function destory($categoires_id){
        $categories=Category::find($categoires_id);
        if($categories->image){
            Storage::delete('public/category/'.$categories->image);
        }
        $categories->delete();

        notify()->warning('Category is Deleted !');
        return redirect('admin/categories');
    }

    public function active($categoires_id){

        $category=Category::find($categoires_id);
        $category->status=1;
        $category->update();
        notify()->warning('Category Status is !','Inactive');
       
        return redirect('admin/categories');
    }
    public function inactive($categoires_id){

        $category=Category::find($categoires_id);
        $category->status=0;
        $category->update();
        notify()->success('Category Status is !','Active');
        return redirect('admin/categories');
    }
}
