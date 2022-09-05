<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Semua Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">App</a></li>
                        <li class="breadcrumb-item">Data Barang</li>
                        <li class="breadcrumb-item active">Semua Barang</li>
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
                        <button type="submit" class="btn btn-primary btn-md rounded mr-2"><i class="fas fa-print"></i> Cetak Laporan</button>
                        <button type="submit" class="btn btn-success btn-md rounded"><i class="fas fa-barcode"></i> Cetak Barcode</button>
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
                                <th>Barcode Barang</th>
                                <th>Nama Barang</th>
                                <th>Merk Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_barang as $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <?= $value['kode_barang'] ?><br>
                                        <a href="#" class="badge badge-secondary" data-toggle="modal" data-target="#modalBarcodeBarang<?= $value['kode_barang'] ?>">
                                            <i class="fas fa-barcode"></i>
                                            Get Barcode
                                        </a>
                                    </td>
                                    <td><?= $value['barcode_barang'] ?></td>
                                    <td><?= $value['nama_barang'] ?></td>
                                    <td><?= $value['merk_barang'] ?></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
foreach ($data_barang as $value) { ?>
    <div class="modal fade" id="modalBarcodeBarang<?= $value['kode_barang'] ?>" tabindex="-1" aria-hidden="true" aria-labelledby="modalBarcode">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Barcode</h5>
                </div>
                <div class="modal-body">
                    <?php
                    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                    echo $generator->getBarcode($value['kode_barang'], $generator::TYPE_CODE_128);
                    echo $value['kode_barang'];
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php }

?>