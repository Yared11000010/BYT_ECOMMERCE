<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Group;
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

    public function store(CategoryFormRequest $request){
            
        $validatedata=$request->validated();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filname=time().'.'.$ext;
            $file->move('uploads/categories/',$filname);
            $validateData['image']="uploads/categories/$filname";

        }
       
        Category::create([
        'group_id'=>$validatedata['group_id'],
        'name'=>$validatedata['name'],
        'discount'=>$validatedata['discount'],
        'description'=>$validatedata['description'],
        'url'=>$validatedata['url'],
        'meta_title'=>$validatedata['meta_title'],
        'meta_description'=>$validatedata['meta_description'],
        'meta_keywords'=>$validatedata['meta_keywords'],
        'meta_description'=>$validatedata['meta_description'],
        'status'=> $validatedata['status']=$request->status==true?'1':'0',

        ]);
        
        notify()->success('Category is Added !');
        return redirect('admin/categories');


    }


    
}
