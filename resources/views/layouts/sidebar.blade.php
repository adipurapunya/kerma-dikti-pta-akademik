<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img alt="Image placeholder" width="36" height="36" src="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3"> @if(auth()->user()->level == 'Admin') Admin @endif  @if(auth()->user()->level == 'Universitas') Universitas @endif  <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @if(auth()->user()->level == 'Admin')
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('barang') }}">
        <i class="fas fa-fw fa-cog"></i>
            <span>List Universitas</span></a>
    </li>
    @endif
    
    @if(auth()->user()->level == 'Admin')
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kategori') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>kategori Universitas</span></a>
    </li>
    @endif

    @if(auth()->user()->level == 'Universitas')
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('proposal') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Pengajuan Ijin Kerja Sama</span></a>
    </li>
    @endif
       <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>