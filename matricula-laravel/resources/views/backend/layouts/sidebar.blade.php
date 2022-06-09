<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-text mx-3">Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @php
    $url = explode('/', Request::url());
    $size = count($url);
    @endphp

    <!-- Nav Item - Dashboard -->
    @if($size == 4)
    <li class="nav-item active">
        @else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    {{-- Products --}}
    @if($size > 4 && $url[4] == "product")
    <li class="nav-item active">
        @else
    <li class="nav-item">
        @endif
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse"
            aria-expanded="true" aria-controls="productCollapse">
            <i class="fas fa-user"></i>
            <span>Matrículas</span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opções:</h6>
                <a class="collapse-item" href="{{ route('registers.index') }}">Matrículas</a>
            </div>
        </div>
    </li>




    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
