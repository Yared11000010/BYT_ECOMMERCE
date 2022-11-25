@extends('admindashboard.maindashboard')
@section('dashboard')
<div class="pagetitle bg-light"> 
   <nav>
      <ol class="breadcrumb p-3">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item">Section</li>
         <li class="breadcrumb-item active">All Sections</li>
      </ol>
   </nav>
 </div>
 <section class="section">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">Section Data</h5>
               <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
                <li class="nav-item">
                  <a class="nav-link active" href=""><i class="fa fa-list mr-2"></i>All Sections</a>
                </li>
                  <li class="nav-item border-none">
                  <a class="nav-link bg-light" href="{{ route('add_section')}}"><i class=" fas fa-plus"></i>Add Section</a>
                </li>
               </ul>
             
               <table class="table datatable">
                  <thead>
                     <tr>
                        <th scope="col">Section ID</th>
                        <th scope="col">Name</th>

                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>Women</td>
                        <td>
                         <a href=""><span style="border-radius: 0.2rem;padding-left:3px;padding-right:3px"  class=" bg-danger text-white    active-btn">Inactive</span></a>
                        </td>
                        <td>
                         <a href="{{ route('edit_sections') }}" class=" btn btn-warning btn-sm">Edit</a>
                         <a href="" onclick="return confirm('Are you sure,you want to delete this Slider ?? ') " class="btn btn-danger btn-sm" >Delete</a>
                        </td>
               
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
