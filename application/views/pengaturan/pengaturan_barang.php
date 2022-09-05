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
                    <h5 class="text-bold">Tambah Barang</h5>
                </div>
                <form action="<?= base_url('insert/tambah_barang') ?>" method="POST">
                    <div class="card-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Kode Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="text" class="form-control" name="kode_barang" id="kode_barang" value="<?= $kode_barang ?>" readonly required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Nama Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukan nama barang" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="merkBarang">Merk Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="text" class="form-control" name="merk_barang" id="merek_barang" placeholder="Masukan nama barang" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Kategori Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <select name="kategori_barang" id="kategori_barang" class="form-control" required>
                                        <option>Pilih Kategori Barang</option>
                                        <?php
                                        foreach ($data_kategori as $value) { ?>
                                            <option value="<?= $value['nama_kategori'] ?>" class="text-bold text-uppercase"><?= $value['nama_kategori'] ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kondisiBarang">Kondisi Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <select name="kondisi_barang" id="kondisi_barang" class="form-control" required>
                                        <option>Pilih Kondisi Barang</option>
                                        <option value="1" class="text-bold">Baru</option>
                                        <option value="2" class="text-bold">Bekas</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="suplierBarang">Suplier Barang</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <select name="suplier_barang" id="suplier_barang" class="form-control" required>
                                        <option>Pilih Kondisi Barang</option>
                                        <?php
                                        foreach ($data_suplier as $value) { ?>
                                            <option value="<?= $value['nama_suplier'] ?>" class="text-bold text-uppercase"><?= $value['nama_suplier'] ?></option>
                                        <?php }
                                        ?>
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
                <h5 class="modal-title">Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('insert/tambah_kategori') ?>" method="post">
                    <div class="row">
                        <div class="col-md-5 col-8">
                            <label for="">ID Kategori</label>
                        </div>
                        <div class="col-md-5 col-8">
                            <label for="">Nama Kategori</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5 col-8">
                            <input type="text" class="form-control " name="id_kategori" id="id_kategori" value="<?= $id_kategori ?>" readonly require>
                        </div>
                        <div class="col-md-5 col-8">
                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Masukan nama kategori" require>
                        </div>
                        <div class="col-md-2 col-8">
                            <button type="submit" class="btn btn-primary btn-md btn-block mb-3">Tambah</button>
                        </div>
                    </div>
                </form>
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-responsive-sm table-hover table-striped" id="tableDataKategori">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Kategori</th>
                                    <th>Nama Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_kategori as $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['id_kategori'] ?></td>
                                        <td class="text-uppercase"><?= $value['nama_kategori'] ?></td>
                                    </tr>
                                <?php }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Error Message -->
<script>
    <?= $this->session->flashdata('message') ?>
</script>