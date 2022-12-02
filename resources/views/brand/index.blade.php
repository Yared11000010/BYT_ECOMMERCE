@extends('admindashboard.maindashboard')
@section('dashboard')
<div class="pagetitle bg-light"> 
   <nav>
      <ol class="breadcrumb p-3">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item">Brand</li>
         <li class="breadcrumb-item active">All Brands</li>
      </ol>
   </nav>
 </div>
 <section class="section">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">Brands Data</h5>
               <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
                <li class="nav-item">
                  <a class="nav-link active" href=""><i class="fa fa-list mr-2"></i>All Brands</a>
                </li>
                  <li class="nav-item border-none">
                  <a class="nav-link bg-light" href="{{ route('add_brand')}}"><i class=" fas fa-plus"></i>Add Brand</a>
                </li>
               </ul>
             
               <table class="table datatable">
                  <thead>
                     <tr>
                        <th scope="col">Num</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach ($brands as $k => $brand)
                     
                     <tr>
                        <td>{{ $k++ }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>
                           @if($brand->status==1)
                                 <a href="{{ url('admin/inactive/brands/'.$brand->id) }}"><span style="border-radius: 0.2rem;padding-left:3px;padding-right:3px"  class=" bg-success text-white    active-btn">Active</span></a>
                           @elseif ($brand->status==0)
                                 <a href="{{ url('admin/active/brands/'.$brand->id) }}"><span style="border-radius: 0.2rem;padding-left:3px;padding-right:3px"  class=" bg-danger  text-white    active-btn">Inactive</span></a>
                            @endif
                           </td>
                        <td><img src="{{ asset('/storage/brand/'.$brand->image) }}" style="width: 50px; height:50px" alt=""></td>
                        <td>
                         <a href="{{ url('admin/brands/'.$brand->id.'/edit') }}" class=" btn btn-warning btn-sm">Edit</a>
                         <a href="{{ url('admin/barnds/'.$brand->id.'/delete') }}" onclick="return confirm('Are you sure,you want to delete this Slider ?? ') " class="btn btn-danger btn-sm" >Delete</a>
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
