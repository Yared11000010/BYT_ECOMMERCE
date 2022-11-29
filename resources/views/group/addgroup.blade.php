@extends('admindashboard.maindashboard')
@section('dashboard')
  <div class="pagetitle  bg-light">
     <nav>
        <ol class="breadcrumb p-3 ">
           <li class="breadcrumb-item font-weight-bold"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item">Add Group</li>
        </ol>
     </nav>
  </div>
  <section class="section">
     <div class="row">
        <div class="col-lg-6">
           <div class="card">
              <div class="card-body">
                 <h5 class="card-title" style="font-weight: bold; font-size:27px;"> Add Group</h5>
                 <ul class="nav pb-5 nav-tabs align-items-end card-header-tabs w-100">
                  <li class="nav-item">
                    <a class="nav-link active" href=""><i class="fa fa-list mr-2"></i>Add Group</a>
                  </li>
                    <li class="nav-item border-none">
                    <a class="nav-link bg-light " href="{{ route('groups') }}"><i class=" fas fa-plus"></i>All Groups</a>
                  </li>
                 </ul>
                 <form method="POST" action="{{ url('admin/groups/store')}}" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8 ">
                       <label for="name" class="form-label">Group Name</label>
                        <input type="text" name="name" class="form-control" >
                        @error('name')
                            <small class=" text-danger">{{ $message }}</small><br>
                        @enderror
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description"  class="form-control" cols="30" rows="4"></textarea>
                        @error('description')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                      <div class=" pb-3 col-md-6  custom-control custom-checkbox pt-2">
                        <label class="custom-control-label" for="status">Group Status</label><br>
                        <input type="checkbox" class="custom-control-input" id="status" name="status">
                    </div>
                    </div>
                    <div class="col-md-8  ">
                    <button type="submit" class=" col-md-4 btn btn-primary  pl-5 pr-5 pt-2 shadow pb-2">Save</button>
                    </div>
                    </div>
                   </form>
              </div>
           </div>
        </div>
     </div>
  </section>
@endsection