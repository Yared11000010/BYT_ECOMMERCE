<aside id="sidebar" class=" colored sidebar " >
  <ul class="sidebar-nav" id="sidebar-nav">
     <li class="nav-item"> <a class="nav-link disabled" href=""> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
     <li class="nav-item pt-4 menu-open">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-person-bounding-box  "></i><span>User Managements</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="components-nav" class=" nav-content collapse  " data-bs-parent="#sidebar-nav">
           <li> <a href="" class=""> <i class=" bi bi-circle active "></i><span>Add User</span> </a></li>
           <li> <a href="" class=""> <i class="bi bi-circle"></i><span>Lists Of Users</span></a></li>
        </ul>
     </li>
     <li class="nav-item {{ request()->is('admin/section*')?'':'collapsed' }} ">
      <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#" aria-expanded="false"> <i class="bi bi-bar-chart"></i><span>Catelog Managements</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="charts-nav" class="nav-content collapse {{ request()->is('admin/section*')?'show':'' }}  " data-bs-parent="" style="">
         <li> <a href="{{ route('add_section') }}" class=" nav-link {{ request()->is('admin/section*')?'active':'' }}"> <i class="bi bi-circle"></i><span>Sections</span> </a></li>
         <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Brands</span> </a></li>
         <li> <a href="charts-apexcharts.html"> <i class="bi bi-circle"></i><span>Categorys</span> </a></li>
      </ul>
     </li>
    
     <li class="nav-heading">Pages</li>
     <li class="nav-item"> <a class="nav-link collapsed" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>Portfolio Setting</span> </a></li>
     <li class="nav-item "> <a class="nav-link " href=""> <i class="bi bi-lock "></i> <span>Lock Screen</span> </a></li>

    
  </ul>
</aside>