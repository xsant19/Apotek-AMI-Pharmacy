        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-dharmachakra"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Apotek Ami Pharmacy</sup></div>
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
                Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-medkit"></i>
                    <span>Data Obat</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pengolahan Data</h6>
                        <a class="collapse-item" href="/data/obat">Tampil Data Obat</a>
                        <a class="collapse-item" href="/obat/new">Tambah Data Obat</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Suplier</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pengolahan Data</h6>
                        <a class="collapse-item" href="/data/suplier">Tampil Data Suplier</a>
                        <a class="collapse-item" href="/suplier/new">Tambah Data Suplier</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/data/transaksi">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Transaksi</span></a>
            </li>
            <div class="divider"></div>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->