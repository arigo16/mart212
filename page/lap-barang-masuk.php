<?php
    $today = date("Y-m-d");
    $today30 = date('Y-m-d', strtotime("-30 day"));
?>

<div class="content custom-scrollbar">

    <div id="e-commerce-product" class="page-layout simple tabbed">

        <!-- HEADER -->
        <div class="page-header bg-secondary text-auto row no-gutters align-items-center justify-content-between p-6">

            <div class="row no-gutters align-items-center">

                <div class="h2">Laporan Transaksi Barang Masuk</div>
            </div>

        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">

            <div class="tab-content">

                <div class="tab-pane fade show active" id="basic-info-tab-pane" role="tabpanel" aria-labelledby="basic-info-tab">
                    <div class="card p-6">
                        <form action="report/struk-barang-masuk.php" method="GET" target="_blank">
                            <div class="card">
                                <div class="card-header">
                                    Cetak Surat Bukti Barang Masuk
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                    <div class="col-12 form-group">
                                        <input type="text" class="form-control" name="kode" required/>
                                        <label>Kode Barang Masuk</label>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary">LIHAT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade show active" id="basic-info-tab-pane" role="tabpanel" aria-labelledby="basic-info-tab">
                    <div class="card p-6">
                        <form action="report/laporan-barang-masuk-mitra-cetak.php" method="POST" target="_blank">
                            <div class="card">
                                <div class="card-header">
                                    Laporan Penjualan Berdasarkan Mitra
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                    <div class="col-12 form-group">
                                        <label for="mitra">Mitra</label>
                                            <select class="form-control" name="mitra" id="mitra" required>
                                                <option></option>
                                                <?php
                                                    $r = $con->query("SELECT * FROM mitra");
                                                    foreach ($r as $rr) {
                                                ?>
                                                    <option value="<?php echo $rr['id_mitra'];?>"><?php echo $rr['nama_mitra'];?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-6 form-group">
                                            <input class="form-control" type="date" value="<?php echo $today30 ?>" name="tgl_mulai"/>
                                            <label>Tanggal Mulai</label>
                                        </div>
                                        <div class="col-6 form-group">
                                            <input class="form-control" type="date"  value="<?php echo $today ?>" name="tgl_akhir"/>
                                            <label>Tanggal Akhir</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary">LIHAT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade show active" id="basic-info-tab-pane" role="tabpanel" aria-labelledby="basic-info-tab">
                    <div class="card p-6">
                        <form action="report/laporan-barang-masuk-cetak.php" method="POST" target="_blank">
                            <div class="card">
                                <div class="card-header">
                                    Laporan Per Periode
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-6 form-group">
                                            <input class="form-control" type="date" value="<?php echo $today30 ?>" name="tgl_mulai"/>
                                            <label>Tanggal Mulai</label>
                                        </div>
                                        <div class="col-6 form-group">
                                            <input class="form-control" type="date"  value="<?php echo $today ?>" name="tgl_akhir"/>
                                            <label>Tanggal Akhir</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary">LIHAT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- / CONTENT -->
    </div>

</div>