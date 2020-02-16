<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-anchor"></i>
        </div>
        <div class="sidebar-brand-text mx-1">NOMADS ADMIN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ucfirst(request()->segment(1))==='admin/*' ? 'active':''}} ">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Paket Travel -->

    <li class="nav-item ">
        <a class="nav-link" href="{{route('travel-package.index')}}">
            <i class="fas fa-fw fa-shuttle-van"></i>
            <span>Paket Travel</span></a>
    </li>
    <!-- Nav Item - Gallery Travel -->

    <li class="nav-item ">
        <a class="nav-link" href="{{route('gallery.index')}}">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery Travel</span></a>
    </li>

    <!-- Nav Item - Transaksi -->

    <li class="nav-item ">
        <a class="nav-link" href="{{route('transaction.index')}}">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Transaksi</span></a>
    </li>


    <hr class="sidebar-divider my-0">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none mt-5 d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
