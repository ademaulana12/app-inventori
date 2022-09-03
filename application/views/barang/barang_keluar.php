<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Barang Keluar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item">Data Barang</li>
                        <li class="breadcrumb-item active">Barang Keluar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="small-box shadow rounded bg-white">
                <div class="inner">
                    <div class="btn-group" role="group">
                        <button class="btn btn-primary btn-md mr-2 rounded" data-toggle="modal" data-target="#barangkeluar"><i class="fas fa-plus-circle"></i> Tambah Barang</button>
                        <button class="btn btn-success btn-md rounded"><i class="fas fa-print"></i> Cetak Laporan</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive-sm table-hover table-striped table-bordered" id="tableSemuaBarang">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Keluar -->
<div class="modal fade" id="barangkeluar" tabindex="-1" aria-hidden="true" aria-labelledby="barangkeluar">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <div class="modal-title">
                    <h5>Tambah Barang Keluar</h5>
                </div>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, iusto eligendi porro laudantium corporis repudiandae, iure quos eius, doloremque suscipit sit nobis nisi? Doloremque mollitia laboriosam animi pariatur neque optio!</p>
            </div>
        </div>
    </div>
</div>