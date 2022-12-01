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
     <li class="nav-item {{ request()->is('admin/section*')?'':'collapsed' }}  {{ request()->is('admin/categories*')?'':'collapsed' }} {{ request()->is('admin/groups*')?'':'collapsed' }} {{ request()->is('admin/subcategories*')?'':'collapsed' }}">
      <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#" aria-expanded="false"> <i class="bi bi-bar-chart"></i><span>Catelog Managements</span><i class="bi bi-chevron-down ms-auto"></i> </a>
      <ul id="charts-nav" class="nav-content collapse {{ request()->is('admin/subcategories*')?'show':'' }} {{ request()->is('admin/section*')?'show':'' }} {{ request()->is('admin/categories*')?'show':'' }} {{ request()->is('admin/groups*')?'show':'' }}" data-bs-parent="" style="">
         <li> <a href="{{ route('all_sections') }}" class="{{ request()->is('admin/section*')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Sections</span> </a></li>
         <li> <a href="{{ route('groups') }}" class="{{ request()->is('admin/groups*')?'nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Groups</span> </a></li>
         <li> <a href="{{ route('categories') }}" class=" {{ request()->is('admin/categories*')?' nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Categorys</span> </a></li>
         <li> <a href="{{ route('sub_categories') }}" class=" {{ request()->is('admin/subcategories*')?' nav-link active':'' }}"> <i class="bi bi-circle"></i><span>Sub_Category</span> </a></li>
         <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Products</span> </a></li>
      </ul>
     </li>
    
     <li class="nav-heading">Pages</li>
     <li class="nav-item"> <a class="nav-link collapsed" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>Portfolio Setting</span> </a></li>
     <li class="nav-item "> <a class="nav-link " href=""> <i class="bi bi-lock "></i> <span>Lock Screen</span> </a></li>

    
  </ul>
</aside>