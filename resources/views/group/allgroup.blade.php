@extends('admindashboard.maindashboard')
@section('dashboard')
<div class="pagetitle bg-light"> 
   <nav>
      <ol class="breadcrumb p-3">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item">Group</li>
         <li class="breadcrumb-item active">All Groups</li>
      </ol>
   </nav>
 </div>
 <section class="section">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">Groups Data</h5>
               <ul class="nav nav-tabs pb-4 align-items-end card-header-tabs w-100">
                <li class="nav-item">
                  <a class="nav-link active" href=""><i class="fa fa-list mr-2"></i>All Groups</a>
                </li>
                  <li class="nav-item border-none">
                  <a class="nav-link bg-light" href="{{ route('add_group') }}"><i class=" fas fa-plus"></i>Add Group</a>
                </li>
               </ul>
              
               <table class="table datatable">
                  <thead>

                     <tr>
                        <th scope="col">Group ID</th>
                        <th scope="col">Group Name</th>
                        <th scope="col">Group Descriptioin</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                   @foreach ($group as $groups)
                    
                 
                     <tr>
                        <td>{{ $groups->id }}</td>
                        <td>{{ $groups->name }}</td>
                        <td>{{ $groups->description }}</td>
                        <td>
                            @if ($groups->status==0)
                            <a href=""><span style="border-radius: 0.2rem;padding-left:3px;padding-right:3px"  class=" bg-danger text-white    active-btn">Inactive</span></a>
                            @elseif ($groups->status==1)
                            <a href=""><span style="border-radius: 0.2rem;padding-left:5px;padding-right:5px" class=" bg-success text-white  active-btn">Active</span></a>                        
                            @endif
                       </td>
                        <td>
                         <a href="{{ url('admin/groups/'.$groups->id.'/edit') }}" class=" btn btn-warning btn-sm">Edit</a>
                         <a href="{{ url('admin/groups/delete/'.$groups->id) }}" onclick="return confirm('Are you sure,you want to delete this Group ?? ') " class="btn btn-danger btn-sm" >Delete</a>
                        </td>
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
