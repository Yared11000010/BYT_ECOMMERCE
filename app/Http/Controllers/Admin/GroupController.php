<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupFormRequest;
use Illuminate\Http\Request;
use App\Models\Group;
use Ramsey\Uuid\Guid\Guid;

class GroupController extends Controller
{
    //
    public function index(){

        $group =Group::all();

        return view('group.allgroup',compact('group',$group));
    }

    public function create(){

        return view('group.addgroup');
    }

    public function store(GroupFormRequest $request){

        $validatedata=$request->validated();
        $group=new Group();
        $group->name=$validatedata['name'];
        $group->description=$validatedata['description'];
        $group->status=$request->status==true?'1':'0';

        $group->save();
        notify()->success('Group is Added !');

        return redirect('admin/groups');
    }

    public function update(GroupFormRequest $request,$group_id){
        $validatedata=$request->validated();
        $group=Group::findOrFail($group_id);
        $group->name=$validatedata['name'];
        $group->description=$validatedata['description'];
        $group->status=$request->status==true?'1':'0';

        $group->update();
        notify()->warning('Group is Updated !');

        return redirect('admin/groups');

    }


    public function edit($group_id){

        $group=Group::find($group_id);

        return view('group.editgroup',compact('group',$group));
    }

    public function destory($group_id){


        $group=Group::find($group_id);
        $group->delete();

        notify()->warning('Group is Deleted !');
        return redirect('admin/groups');

    }
}
