 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('admin_dashboard') }}" class="brand-link">
         <img src="{{ asset('dist-admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Holocomic</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('dist-admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Alexander Pierce</a>
             </div>
         </div>
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="{{ route('admin_dashboard') }}" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p> Dashboard </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('admin_user_show') }}" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p> User </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('admin_post_show') }}" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p> Post </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('admin_katsub_show') }}" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p> Kategori & Sub Kategori </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link "data-toggle="modal" data-target="#logoutModal">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p> Logout </p>
                     </a>
                 </li>
 </aside>
 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
