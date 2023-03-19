        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">SIPERBA <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Operasional
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/barang-masuk">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Barang Masuk</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/barang-keluar">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Barang Keluar</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kategori-barang">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kategori Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kategori-pembiayaan">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kategori Pembiayaan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/nasabah">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Nasabah</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/ops">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Operasional</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Log out</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->