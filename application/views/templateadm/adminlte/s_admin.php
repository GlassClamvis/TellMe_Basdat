        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('Admin/dashboard') ?>" class="brand-link">
                <img src="<?php echo base_url('assets/tealdark/images/logo/putih.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Tell Me Basdat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?php echo base_url('Admin/dashboard') ?>" class="nav-link">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users" aria-hidden="true"></i>
                                <p>
                                    Data Pegawai
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                    <a href="<?php echo base_url('Admin/DataPegawai/Data_admin/index')?>" class="nav-link">
                                        <i class="fas fa-user" aria-hidden="true"></i>
                                        <p>Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('Admin/DataPegawai/Data_dosen/index')?>" class="nav-link">
                                        <i class="fas fa-user" aria-hidden="true"></i>
                                        <p>Dosen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('Admin/DataPegawai/Data_teknisi/index')?>" class="nav-link">
                                        <i class="fas fa-user" aria-hidden="true"></i>
                                        <p>Teknisi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Admin/DataMahasiswa/Data_mhs/index')?>" class="nav-link">
                                <i class="fas fa-users" aria-hidden="true"></i>
                                <p>
                                    Data Mahasiswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fa fa-align-left" aria-hidden="true"></i>
                                <p>
                                    Topik
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('Admin/topik/index') ?>" class="nav-link">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <p>Topik & Sub Topik</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('Admin/level/index') ?>" class="nav-link">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <p>Level</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">LIST MENU</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fa fa-align-left" aria-hidden="true"></i>
                                <p>
                                    List Menu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <p>Menu </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <p>Menu </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>