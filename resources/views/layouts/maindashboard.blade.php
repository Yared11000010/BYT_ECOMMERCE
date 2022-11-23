@extends('admindashboard.maindashboard')

@section('dashboard')
   <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
         </ol>
      </nav>
   </div>
   <section class="section dashboard">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-xxl-3 col-md-6">
                  <div class="card info-card sales-card">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Sales <span>| Today</span></h5>
                        <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-cart"></i></div>
                           <div class="ps-3">
                              <h6>145</h6>
                              <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-md-6">
                  <div class="card info-card revenue-card">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Revenue <span>| This Month</span></h5>
                        <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-currency-dollar"></i></div>
                           <div class="ps-3">
                              <h6>$3,264</h6>
                              <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-12">
                  <div class="card info-card customers-card">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Customers <span>| This Year</span></h5>
                        <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-people"></i></div>
                           <div class="ps-3">
                              <h6>1244</h6>
                              <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-12">
                  <div class="card info-card customers-card">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Customers <span>| This Year</span></h5>
                        <div class="d-flex align-items-center">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-people"></i></div>
                           <div class="ps-3">
                              <h6>1244</h6>
                              <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-8">
                  <div class="card recent-sales overflow-auto">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Recent Sales <span>| Today</span></h5>
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table table-borderless datatable dataTable-table">
                           <thead>
                              <tr><th scope="col" data-sortable="" style="width: 10.8996%;"><a href="#" class="dataTable-sorter">#</a></th><th scope="col" data-sortable="" style="width: 24.4205%;"><a href="#" class="dataTable-sorter">Customer</a></th><th scope="col" data-sortable="" style="width: 39.1832%;"><a href="#" class="dataTable-sorter">Product</a></th><th scope="col" data-sortable="" style="width: 10.0717%;"><a href="#" class="dataTable-sorter">Price</a></th><th scope="col" data-sortable="" style="width: 15.4525%;"><a href="#" class="dataTable-sorter">Status</a></th></tr>
                           </thead>
                           <tbody><tr><th scope="row"><a href="#">#2457</a></th><td>Brandon Jacob</td><td><a href="#" class="text-primary">At praesentium minu</a></td><td>$64</td><td><span class="badge bg-success">Approved</span></td></tr><tr><th scope="row"><a href="#">#2147</a></th><td>Bridie Kessler</td><td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td><td>$47</td><td><span class="badge bg-warning">Pending</span></td></tr><tr><th scope="row"><a href="#">#2049</a></th><td>Ashleigh Langosh</td><td><a href="#" class="text-primary">At recusandae consectetur</a></td><td>$147</td><td><span class="badge bg-success">Approved</span></td></tr><tr><th scope="row"><a href="#">#2644</a></th><td>Angus Grady</td><td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td><td>$67</td><td><span class="badge bg-danger">Rejected</span></td></tr><tr><th scope="row"><a href="#">#2644</a></th><td>Raheem Lehner</td><td><a href="#" class="text-primary">Sunt similique distinctio</a></td><td>$165</td><td><span class="badge bg-success">Approved</span></td></tr></tbody>
                        </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 5 of 5 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"></ul></nav></div></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>
                        <div class="activity">
                           <div class="activity-item d-flex">
                              <div class="activite-label">32 min</div>
                              <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                              <div class="activity-content"> Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">56 min</div>
                              <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                              <div class="activity-content"> Voluptatem blanditiis blanditiis eveniet</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">2 hrs</div>
                              <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                              <div class="activity-content"> Voluptates corrupti molestias voluptatem</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">1 day</div>
                              <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                              <div class="activity-content"> Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">2 days</div>
                              <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                              <div class="activity-content"> Est sit eum reiciendis exercitationem</div>
                           </div>
                           <div class="activity-item d-flex">
                              <div class="activite-label">4 weeks</div>
                              <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                              <div class="activity-content"> Dicta dolorem harum nulla eius. Ut quidem quidem sit quas</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-8">
                  <div class="card top-selling overflow-auto">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                   
                  </div>
               </div>
               <div class="col-8">
                  <div class="card top-selling overflow-auto">
                     <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                           <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                           </li>
                           <li><a class="dropdown-item" href="#">Today</a></li>
                           <li><a class="dropdown-item" href="#">This Month</a></li>
                           <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                     </div>
                     <div class="card-body pb-0">
                        <h5 class="card-title">Top Selling <span>| Today</span></h5>
                        <table class="table table-borderless">
                           <thead>
                              <tr>
                                 <th scope="col">Preview</th>
                                 <th scope="col">Product</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Sold</th>
                                 <th scope="col">Revenue</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row"><a href="#"><img src="{{asset('backend/img/product-1.jpg')}}" alt=""></a></th>
                                 <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                 <td>$64</td>
                                 <td class="fw-bold">124</td>
                                 <td>$5,828</td>
                              </tr>
                              <tr>
                                 <th scope="row"><a href="#"><img src="{{asset('backend/img/product-2.jpg')}}" alt=""></a></th>
                                 <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                 <td>$64</td>
                                 <td class="fw-bold">124</td>
                                 <td>$5,828</td>
                              </tr>
                              <tr>
                                 <th scope="row"><a href="#"><img src="{{asset('backend/img/product-3.jpg')}}" alt=""></a></th>
                                 <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                 <td>$64</td>
                                 <td class="fw-bold">124</td>
                                 <td>$5,828</td>
                              </tr>
                              <tr>
                                 <th scope="row"><a href="#"><img src="{{asset('backend/img/product-4.jpg')}}" alt=""></a></th>
                                 <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                 <td>$64</td>
                                 <td class="fw-bold">124</td>
                                 <td>$5,828</td>
                              </tr>
                              <tr>
                                 <th scope="row"><a href="#"><img src="{{asset('backend/img/product-5.jpg')}}" alt=""></a></th>
                                 <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                 <td>$64</td>
                                 <td class="fw-bold">124</td>
                                 <td>$5,828</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </section>
@endsection