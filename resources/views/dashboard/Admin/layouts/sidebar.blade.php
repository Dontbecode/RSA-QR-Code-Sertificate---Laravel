

<!-- Sidebar -->
<ul class="navbar-nav bg-gray-800 sidebar sidebar-dark accordion" id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard/Admin">
        <div class="fa-lg m-2" >
            <img src="/style/img/Logo.png" height="150" width="150" alt="">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard/Admin">
            <i class="fas fa-fw fa-thermometer-half"></i>
            <span>Dashboard</span> </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Mengelola Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data-data :</h6>
                <a class="collapse-item" href="/dashboard/Admin/layouts/DataAdmin" hidden>Data Admin</a>
                <a class="collapse-item" href="/dashboard/Admin/layouts/DataPeserta">Data Peserta Pelatihan</a>
                <a class="collapse-item" href="/dashboard/Admin/layouts/DataJenisPelatihan">Data Jenis Pelatihan</a>
            
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Penilaian dan Sertifikasi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Penilaian dan Sertifikasi:</h6>
                
                <a class="collapse-item" href="/dashboard/Admin/layouts/DataNilaidanAbsensi">Absensi dan Nilai</a>
                <a class="collapse-item" href="/dashboard/Admin/layouts/DataCetakSertifikat">Data Sertifikat</a>
                <a class="collapse-item" href="/dashboard/Admin/layouts/Tamplatesertifikat" hidden >Tamplate Sertifikat</a>
           
            </div>
        </div>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->