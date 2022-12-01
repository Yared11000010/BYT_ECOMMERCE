@extends('admindashboard.maindashboard')
@section('dashboard')
<div class="pagetitle bg-light">
    <nav>
       <ol class="breadcrumb p-3 ">
          <li class="breadcrumb-item font-weight-bold"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Edit Product</li>
       </ol>
    </nav>
 </div>
 <section class="section col-md-8" >
   <div class="card" >
      <div class="card-body pt-3">
                     <h5 class="card-title">Edit Categories</h5>
                     <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
                        <li class="nav-item border-none">
                           <a class="nav-link active bg-light" href=""><i class=" fas fa-plus"></i>Edit Category</a>
                         </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{ route('categories') }}"><i class="fa fa-list mr-2"></i>All Categories</a>
                        </li>
                         
                       </ul>
                     <form class="row g-3" action="{{ url('admin/categories/update/') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $categories->id }}">
                        <div class="col-md-6">
                           <label for="group_id" class="form-label"> Select Group</label> 
                           <select name="group_id" class="form-select">
                              <option  value="{{ $categories->id }}">{{ $categories->name }}</option>
                             @foreach ($groups as $group)
                             <option value="{{ $group->id }}">{{$group->name }}</option>
                             @endforeach
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" value="{{ $categories->name }}" name="name">
                            @error('name')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                           <label for="image" class="form-label">Category Image</label>
                            <input type="file" class="form-control" value="{{ $categories->image }}" name="image">
                            @error('image')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                            <div class="pt-3">
                              <div class="row">
                                <img src="{{ asset('/storage/category/'.$categories->image) }}" style="width:80px; height:50px" class=" rounded" alt="">
                              </div>                     
                           </div>
                        </div>

                        <div class="col-md-6">
                           <label for="discount" class="form-label">Category Discount</label>
                            <input type="text" class="form-control" value="{{$categories->discount }}" name="discount">
                            @error('discount')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 ">
                           <label for="description" class="form-label">Category Description</label>
                           <textarea name="description" class="form-control" cols="30" rows="3">{{$categories->description }}</textarea>
                           @error('description')
                           <small class=" text-danger">{{ $message }}</small>
                           @enderror
                         </div>
                        <div class="col-md-6">
                            <label for="url" class="form-label">Category URL</label>
                             <input type="text" class="form-control" value="{{ $categories->url }}" name="url">
                             @error('url')
                             <small class=" text-danger">{{ $message }}</small>
                             @enderror
                        </div>
                         <div class="col-md-6 ">
                           <label for="meta_title" class="form-label">Meta Title</label>
                           <textarea name="meta_title"  class="form-control" cols="20" rows="2">{{$categories->meta_title }}</textarea>
                           @error('meta_title')
                           <small class=" text-danger">{{ $message }}</small>
                           @enderror
                         </div>
                         <div class="col-md-6 ">
                           <label for="meta_description" class="form-label">Meta Description</label>
                           <textarea name="meta_description"  class="form-control" cols="20" rows="2">{{$categories->meta_description }}</textarea>
                           @error('meta_description')
                           <small class=" text-danger">{{ $message }}</small>
                           @enderror
                         </div>
                         <div class="col-md-6 ">
                           <label for="meta_keywords" class="form-label">Meta Keywords</label>
                           <textarea name="meta_keywords"  class="form-control" cols="20" rows="2">{{$categories->meta_keywords }}</textarea>
                           @error('meta_keywords')
                           <small class=" text-danger">{{ $message }}</small>
                           @enderror
                         </div>                                  
                     <div class="form-group pt-3 ">
                     <input type="submit" class=" btn btn-primary pt-2 pb-2 shadow" value="UPDATE">  
                     </div>
          </form>
         </div>
        </div>
      </div>
      </div>
 </section>
@endsection