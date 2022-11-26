<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionFormRequest;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //

    public function index(){

        $allsection=Section::all();

        return view('section.allsection',compact('allsection',$allsection));
    }
    public function addsection(){
       
        return view('section.addsection');
    }

    public function store(SectionFormRequest $request){
        $validatedsection=$request->validated();
        $section =new Section();
        $section->name=$validatedsection['name'];
        $section->status=$request->status==true?'1':'0';
        $section->save();

        notify()->success('Section is Added !');
        return redirect('admin/section/all');
    }

    public function edit($section_id){
        $section=Section::find($section_id);
        return view('section.editsection',compact('section',$section));
    }

    public function update(SectionFormRequest $request,$section_id){

        $validatedsection =$request->validated();

        $section=Section::findOrFail($section_id);
        $section->name=$validatedsection['name'];
        $section->status=$request->status==true?'1':'0';
        $section->update();

        notify()->warning('Section is Updated !','Updated');
        return redirect('admin/section/all');

    }

    public function destroy($section_id){
           $section=Section::find($section_id);
           $section->delete();
           notify()->warning('Section is Deleted !','Deleted');
           return redirect('admin/section/all');
          
    }

    public function active($section_id){

        $section=Section::find($section_id);
        $section->status=1;
        $section->update();
        notify()->warning('Section Status is !','Inactive');
       
        return redirect('admin/section/all');

    }
    public function inactive($section_id){

        $section=Section::find($section_id);
        $section->status=0;
        $section->update();
        notify()->success('Section Status is !','Active');
        return redirect('admin/section/all');

    }
}