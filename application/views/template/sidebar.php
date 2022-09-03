<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <i class="ml-3 fas fa-box img-circle elevation-4"></i>
        <span class="brand-text text-bold ml-2">Inventaris</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('app/dashboard') ?>" class="nav-link <?php if ($this->uri->segment('2') == 'dashboard') {
                                                                                    echo "active";
                                                                                } else {
                                                                                    echo "";
                                                                                } ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p class="text-uppercase text-bold">Dashboard</p>
                    </a>
                </li>
                <li class="nav-header text-bold">BARANG</li>
                <li class="nav-item <?php if ($this->uri->segment('2') == 'semua_barang') {
                                        echo "menu-open";
                                    } else if ($this->uri->segment('2') == 'barang_masuk') {
                                        echo "menu-open";
                                    } else if ($this->uri->segment('2') == 'barang_keluar') {
                                        echo "menu-open";
                                    } else {
                                        echo "";
                                    } ?>">
                    <a href="#" class="nav-link <?php if ($this->uri->segment('2') == 'semua_barang') {
                                                    echo "menu-open active";
                                                } else if ($this->uri->segment('2') == 'barang_masuk') {
                                                    echo "menu-open active";
                                                } else if ($this->uri->segment('2') == 'barang_keluar') {
                                                    echo "menu-open active";
                                                } else {
                                                    echo "";
                                                } ?>">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p class="text-uppercase text-bold">Data Barang</p>
                    </a>
                    <ul class="nav nav-treeview ml-auto">
                        <li class="nav-item">
                            <a href="<?= base_url('app/semua_barang') ?>" class="nav-link <?php if ($this->uri->segment('2') == 'semua_barang') {
                                                                                                echo "active";
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>Semua Barang</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('app/barang_masuk') ?>" class="nav-link <?php if ($this->uri->segment('2') == 'barang_masuk') {
                                                                                                echo "active";
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>Barang Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= base_url('app/barang_keluar') ?>" class="nav-link <?php if ($this->uri->segment('2') == 'barang_keluar') {
                                                                                                echo "active";
                                                                                            } else {
                                                                                                echo "";
                                                                                            } ?>">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>Barang Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('app/suplier') ?>" class="nav-link <?php if ($this->uri->segment('2') == 'suplier') {
                                                                                    echo "active";
                                                                                } else {
                                                                                    echo "";
                                                                                } ?>">
                        <i class="nav-icon fas fa-truck"></i>
                        <p class="text-uppercase text-bold">Data Suplier Barang</p>
                    </a>
                </li>
                <li class="nav-header text-bold">PENGATURAN</li>
                <li class="nav-item">
                    <a href="<?= base_url('app/pengaturan_barang') ?>" class="nav-link <?php if ($this->uri->segment('2') == 'pengaturan_barang') {
                                                                                            echo "active";
                                                                                        } else {
                                                                                            echo "";
                                                                                        } ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p class="text-uppercase text-bold">pengaturan barang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('app/pengaturan_akun') ?>" class="nav-link <?php if ($this->uri->segment('2') == 'pengaturan_akun') {
                                                                                            echo "active";
                                                                                        } else {
                                                                                            echo "";
                                                                                        } ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p class="text-uppercase text-bold">Pengaturan Akun</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>
<!-- End Main Sidebar Container -->