<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Pengaturan Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item">Pengaturan</li>
                        <li class="breadcrumb-item active">Pengaturan Barang</li>
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
                        <button type="button" class="btn btn-primary btn-md mr-2 rounded" data-toggle="modal" data-target="#kategori"><i class="fas fa-plus-circle"></i> Tambah Kategori</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    <h5 class="text-bold">Kategori Barang</h5>
                </div>
                <form action="" method="POST">
                    <div class="card-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Kode Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="text" class="form-control" name="kode_barang" id="kode_barang" readonly required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Nama Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="text" class="form-control" name="kode_barang" id="kode_barang" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Kategori Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <select name="kategori_barang" id="kategori_barang" class="form-control">
                                        <option>Pilih Kategori Barang</option>
                                        <option value="" class="text-bold">Kategori 1</option>
                                        <option value="" class="text-bold">Kategori 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Jumlah Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="number" class="form-control" name="kode_barang" id="kode_barang" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="satuanBarang">Satuan Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <select name="satuan_barang" id="satuan_barang" class="form-control">
                                        <option>Pilih Satuan Barang</option>
                                        <option value="" class="text-bold">Pcs</option>
                                        <option value="" class="text-bold">Pac</option>
                                        <option value="" class="text-bold">Box/Dus</option>
                                        <option value="" class="text-bold">Unit</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Kondisi Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <select name="kondisi_barang" id="kondisi_barang" class="form-control">
                                        <option>Pilih Kondisi Barang</option>
                                        <option value="" class="text-bold">Baru</option>
                                        <option value="" class="text-bold">Bekas</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Kategori -->
<div class="modal fade" id="kategori" tabindex="-1" aria-hidden="true" aria-labelledby="Kategori">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">Modal Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea cum laudantium reprehenderit corrupti illo suscipit autem nihil officiis architecto hic, nemo omnis voluptatum aliquam ad non? Tempora, exercitationem! Aspernatur.</p>
            </div>
        </div>
    </div>
</div>