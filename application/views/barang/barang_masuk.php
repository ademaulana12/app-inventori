<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Barang Masuk</h1>
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
                        <button type="button" class="btn btn-primary btn-md mr-2 rounded" data-toggle="modal" data-target="#semuabarang"><i class="fas fa-plus-circle"></i> Tambah Barang</button>
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

<div class="modal fade" id="semuabarang" tabindex="-1" aria-hidden="true" aria-labelledby="semuabarang">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">Tambah Barang Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem non, nostrum quasi minima, repudiandae maxime consequuntur pariatur repellendus doloremque commodi harum libero laborum iste odit suscipit, vitae odio reiciendis architecto?</p>
            </div>
        </div>
    </div>
</div>