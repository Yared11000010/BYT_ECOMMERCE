@extends('admindashboard.maindashboard')
@section('dashboard')
<div class="pagetitle bg-light">
    <nav>
       <ol class="breadcrumb p-3 ">
          <li class="breadcrumb-item font-weight-bold"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Add Product</li>
       </ol>
    </nav>
 </div>
 <section class="section col-md-8" >
   <div class="card" >
      <div class="card-body pt-3">
                     <h5 class="card-title">Add Categories</h5>
                     <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
                        <li class="nav-item border-none">
                           <a class="nav-link active bg-light" href=""><i class=" fas fa-plus"></i>Add Category</a>
                         </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{ route('categories') }}"><i class="fa fa-list mr-2"></i>All Categories</a>
                        </li>
                         
                       </ul>
                     <form class="row g-3" action="{{ url('admin/categories/store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="col-md-6">
                           <label for="group_id" class="form-label"> Select Group</label> 
                           <select name="group_id" class="form-select">
                              <option  value="">--Select--</option>
                             @foreach ($groups as $group)
                             <option value="{{ $group->id }}">{{$group->name }}</option>
                             @endforeach
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name">
                            @error('name')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                           <label for="image" class="form-label">Category Image</label>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                           <label for="discount" class="form-label">Category Discount</label>
                            <input type="text" class="form-control" name="discount">
                            @error('discount')
                            <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 ">
                           <label for="description" class="form-label">Category Description</label>
                           <textarea name="description" class="form-control" cols="30" rows="3"></textarea>
                           @error('description')
                           <small class=" text-danger">{{ $message }}</small>
                           @enderror
                         </div>
                        <div class="col-md-6">
                            <label for="url" class="form-label">Category URL</label>
                             <input type="text" class="form-control" name="url">
                             @error('url')
                             <small class=" text-danger">{{ $message }}</small>
                             @enderror
                        </div>
                         <div class="col-md-6 ">
                           <label for="meta_title" class="form-label">Meta Title</label>
                           <textarea name="meta_title"  class="form-control" cols="20" rows="2"></textarea>
                           @error('meta_title')
                           <small class=" text-danger">{{ $message }}</small>
                           @enderror
                         </div>
                         <div class="col-md-6 ">
                           <label for="meta_description" class="form-label">Meta Description</label>
                           <textarea name="meta_description"  class="form-control" cols="20" rows="2"></textarea>
                           @error('meta_description')
                           <small class=" text-danger">{{ $message }}</small>
                           @enderror
                         </div>
                         <div class="col-md-6 ">
                           <label for="meta_keywords" class="form-label">Meta Keywords</label>
                           <textarea name="meta_keywords"  class="form-control" cols="20" rows="2"></textarea>
                           @error('meta_keywords')
                           <small class=" text-danger">{{ $message }}</small>
                           @enderror
                         </div>
                         <div class="col-md-6  custom-control custom-checkbox pt-2">
                           <label class="custom-control-label" for="status">Status</label><br>
                           <input type="checkbox" class="custom-control-input form-control" id="status" style="width:25px; height:25px" name="status">
                         </div>  
                                   
                     <div class="form-group pt-3 ">
                     <input type="submit" class=" btn btn-primary pt-2 pb-2 shadow" value="SAVE">  
                     </div>
          </form>
         </div>
        </div>
      </div>
      </div>
 </section>
@endsection