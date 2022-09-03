<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Barang Masuk</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Barang Keluar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Total Barang Fisik</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-6">
                    <div class="jumbotron">
                        <h1 class="text-bold">Selamat Datang</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, soluta rerum! Quasi explicabo dolorem nihil, enim iusto commodi quaerat vitae nobis eveniet quo velit hic ratione tempore quis vel veritatis?</p>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="jumbotron text-center text-bold">
                        <span id="jam" style="font-size: 85px;"></span>
                        <span id="pemisah" style="font-size: 80px;">:</span>
                        <span id="menit" style="font-size: 80px;"></span>
                        <span id="pemisah" style="font-size: 80px;">:</span>
                        <span id="detik" style="font-size: 80px;"> </span>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<script>
    window.setTimeout("waktu()", 1000);

    function waktu() {
        let waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = waktu.getHours();
        document.getElementById("menit").innerHTML = waktu.getMinutes();
        document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
</script>