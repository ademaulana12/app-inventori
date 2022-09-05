<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <button type="button" class="btn btn-primary btn-md text-bold" data-toggle="modal" data-target="#modalPengembang">Tentang Pengembang</button>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item mr-3 dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge navbar-badge">
                    <i class="fas fa-circle" style="color: cyan;"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="btn btn-danger btn-md text-bold" href="<?= base_url('login/logout') ?>">Logout</a>
        </li>
    </ul>
</nav>

<div class="modal fade" id="modalPengembang" tabindex="-1" aria-hidden="true" aria-labelledby="modalPengembang">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title ">
                    <h5 class="text-bold">Tentang Pengembang</h5>
                </div>
            </div>
            <div class="modal-body">
                <p>Saya adalah seorang backend developer, membuat dan mengembangkan sebuah sistem yang sedang dibutuhkan oleh pengguna untuk digunakan sesuai dengan kebutuhannya</p>
                <p>Cek github saya untuk aplikasi lainnya <a href="https://github.com/ademaulana12/" target="_blank">https://github.com/ademaulana12/</a></p>

                <p>Dukungan dan donasi</p>
                <span>Berikan dukunganmu <a href="https://sociabuzz.com/ademaulana0211/tribe" target="_blank">Klik Disini</a></span><br>
                <span>Berikan donasimu <a href="https://sociabuzz.com/ademaulana0211/donate" target="_blank">Klik Disini</a></span>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary btn-md text-bold">Berikan Usulan</a>
            </div>
        </div>
    </div>
</div>
<!-- /.navbar -->