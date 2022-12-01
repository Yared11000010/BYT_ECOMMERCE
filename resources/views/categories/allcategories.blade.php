@extends('admindashboard.maindashboard')
@section('dashboard')
<div class="pagetitle bg-light"> 
   <nav>
      <ol class="breadcrumb p-3">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item">Category</li>
         <li class="breadcrumb-item active">All Categories</li>
      </ol>
   </nav>
 </div>
 <section class="section">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">Categories Data</h5>
               <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
                <li class="nav-item">
                  <a class="nav-link active" href=""><i class="fa fa-list mr-2"></i>All Categories</a>
                </li>
                  <li class="nav-item border-none">
                  <a class="nav-link bg-light" href="{{ route('add_categories') }}"><i class=" fas fa-plus"></i>Add Category</a>
                </li>
               </ul>
             
               <table class="table datatable">
                  <thead>
                     <tr>
                        <th scope="col">Category ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($categories as $k => $category)
                     <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->discount }}</td>
                        <td><img src="{{ asset('/storage/category/'.$category->image) }}" style="width: 50px; height:50px" alt=""></td>
                        <td>
                        @if($category->status==1)
                              <a href="{{ url('admin/inactive/category/'.$category->id) }}"><span style="border-radius: 0.2rem;padding-left:3px;padding-right:3px"  class=" bg-success text-white    active-btn">Active</span></a>
                        @elseif ($category->status==0)
                              <a href="{{ url('admin/active/category/'.$category->id) }}"><span style="border-radius: 0.2rem;padding-left:3px;padding-right:3px"  class=" bg-danger  text-white    active-btn">Inactive</span></a>
                         @endif
                        </td>
                        <td>
                         <a href="{{ url('admin/categories/'.$category->id.'/edit') }}" class=" btn btn-warning btn-sm">Edit</a>
                         <a href="{{ url('admin/categories/'.$category->id.'/delete') }}" onclick="return confirm('Are you sure,you want to delete this Slider ?? ') " class="btn btn-danger btn-sm" >Delete</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               <div class=" pagination-sm">
                  {{-- {{ $categories->links() }} --}}
               </div>
      
            </div>
         </div>
      </div>
   </div>
 </section>
 
@endsection
