<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Suplier</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item">Suplier</li>
                        <li class="breadcrumb-item active">Data Suplier</li>
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
                        <button type="button" class="btn btn-primary btn-md mr-2 rounded" data-toggle="modal" data-target="#suplier"><i class="fas fa-plus-circle"></i> Tambah suplier</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive-sm table-hover table-striped table-bordered" id="tableSemuaBarang">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Suplier</th>
                                <th>Nama Suplier</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat Suplier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_suplier as $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['id_suplier'] ?></td>
                                    <td><?= $value['nama_suplier'] ?></td>
                                    <td><?= $value['nomor_telepon'] ?></td>
                                    <td><?= $value['alamat_suplier'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<!-- Modal suplier -->
<div class="modal fade" id="suplier" tabindex="-1" aria-hidden="true" aria-labelledby="suplier">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">Tambah Suplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('insert/tambah_suplier') ?>" method="post">
                    <div class="form-group row">
                        <div class="col-md-4 col-6">
                            <label for="id_suplier">ID Suplier</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <input type="text" class="form-control" name="id_suplier" id="id_suplier" value="<?= $id_suplier ?>" readonly require>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 col-6">
                            <label for="id_suplier">Nama Suplier</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <input type="text" class="form-control" name="nama_suplier" id="nama_suplier" require>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 col-6">
                            <label for="id_suplier">Nomor Telepon</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <input type="number" class="form-control" name="nomor_telepon" id="nomor_telepon" require>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4 col-6">
                            <label for="id_suplier">Alamat Suplier</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <textarea class="form-control" name="alamat_suplier" id="alamat_suplier" cols="23" rows="5" require></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-6"></div>
                        <div class="col-md-8 col-6">
                            <button type="submit" class="btn btn-primary btn-md mb-3">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    <?= $this->session->flashdata('message') ?>
</script>