<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Pengaturan Akun</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item">Pengaturan</li>
                        <li class="breadcrumb-item active">Pengaturan Akun</li>
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
                        <button class="btn btn-primary btn-md mr-2 rounded" data-toggle="modal" data-target="#dataAkun"><i class="fas fa-plus-circle"></i> Lihat Semua Akun</button><button class="btn btn-success btn-md mr-2 rounded" data-toggle="modal" data-target="#dataAkunAktivasi"><i class="fas fa-check-circle"></i> Aktivasi Akun</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    <h5 class="text-bold">Tambah Akun</h5>
                </div>
                <form action="<?= base_url('insert/account') ?>" method="POST">
                    <div class="card-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">ID Akun</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="text" class="form-control" name="id_akun" id="id_akun" value="<?= $id_akun ?>" readonly required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Nama Lengkap</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Username</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="text" class="form-control" name="username" id="kode_barang" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="kodeBarang">Password</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <label for="satuanBarang">Akses User</label>
                                </div>
                                <div class="col-sm-9 col-6">
                                    <select name="hak_akses" id="hak_akses" class="form-control">
                                        <option>Pilih Hak Akses</option>
                                        <option value="1" class="text-bold">Admin</option>
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

<!-- Modal Data Akun -->
<div class="modal fade" id="dataAkun" tabindex="-1" aria-hidden="true" aria-labelledby="dataAkun">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-bold">Data Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <table class="table table-striped table-hover" id="tableDataAkun">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Hak Akses</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_akun as $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_lengkap'] ?></td>
                                    <td><?= $value['username'] ?></td>
                                    <td><?= $value['hak_akses'] ?></td>
                                    <td class="text-capitalize text-bold"><?= $value['status'] ?></td>
                                    <td>
                                        <a href="<?= base_url('insert/delete/' . $value['id_user']) ?>" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
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

<!-- Modal Aktivasi Akun -->
<div class="modal fade" id="dataAkunAktivasi" tabindex="-1" aria-hidden="true" aria-labelledby="dataAkunAktivasi">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-bold">Data Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <table class="table table-striped table-hover" id="tableDataAkunPending">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Hak Akses</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_akun_pending as $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_lengkap'] ?></td>
                                    <td><?= $value['username'] ?></td>
                                    <td><?= $value['hak_akses'] ?></td>
                                    <td class="text-capitalize text-bold"><?= $value['status'] ?></td>
                                    <td>
                                        <a href="<?= base_url('insert/move_data/' . $value['id_user'] . '/' . $value['nama_lengkap'] . '/' . $value['username'] . '/' . $value['password'] . '/' . $value['hak_akses']) ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>
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

<script>
    <?= $this->session->flashdata('message') ?>
</script>