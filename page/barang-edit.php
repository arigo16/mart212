<?php
	$id = $_GET['id_barang'];
	$r = $con->query("SELECT * FROM barang WHERE id_barang = '$id'");
	foreach ($r as $rr) {
        $idbarang = $rr['id_barang'];
?>

<div class="content custom-scrollbar">

    <div id="e-commerce-product" class="page-layout simple tabbed">

        <!-- HEADER -->
        <div class="page-header bg-secondary text-auto row no-gutters align-items-center justify-content-between p-6">

            <div class="row no-gutters align-items-center">

                <a href="index.php?page=barang" class="btn btn-icon mr-4">
                    <i class="icon icon-arrow-left"></i>
                </a>

                <div class="h2">Edit Barang</div>
            </div>

        </div>
        <!-- / HEADER -->

        <!-- CONTENT -->
        <div class="page-content">

            <div class="tab-content">

                <div class="tab-pane fade show active" id="basic-info-tab-pane" role="tabpanel" aria-labelledby="basic-info-tab">

                    <div class="card p-6">

                        <form action="controller/act-barang-edit.php?id_barang=<?php echo $idbarang; ?>" method="POST">

                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" value="<?php echo $rr['nama_barang'];?>" required/>
                                <label>Nama</label>
                            </div>

                            <!-- <div class="form-group">
                                <textarea class="form-control" aria-describedby="product description" rows="5"></textarea>
                                <label>Product Description</label>
                            </div> -->

                            <div class="form-group">
                            <label for="satuan">Satuan</label>
                                <select class="form-control" id="satuan" name="satuan" required>
                                    <option></option>
                                    <option value="PCS" <?php if($rr['satuan_barang'] == "PCS"){echo "selected";}?>>PCS</option>
                                    <option value="SACHER" <?php if($rr['satuan_barang'] == "SACHER"){echo "selected";}?>>SACHER</option>
                                    <option value="LITER" <?php if($rr['satuan_barang'] == "LITER"){echo "selected";}?>>LITER</option>
                                    <option value="DUS" <?php if($rr['satuan_barang'] == "DUS"){echo "selected";}?>>DUS</option>
                                    <option value="KG" <?php if($rr['satuan_barang'] == "KG"){echo "selected";}?>>KG</option>
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori" required>
                                <option></option>
                                <?php
                                    $s = $con->query("SELECT * FROM kategori");
                                    foreach ($s as $ss) {
                                ?>
                                    <option value="<?php echo $ss['id_kategori'];?>" <?php if($rr['id_kategori']==$ss['id_kategori']){echo "selected"; } ?>><?php echo $ss['nama_kategori'];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="harga_beli" onkeypress="return OnlyNumber(event)" value="<?php echo $rr['harga_beli'];?>" required/>
                                <label>Harga Beli</label>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="harga_jual" onkeypress="return OnlyNumber(event)" value="<?php echo $rr['harga_jual'];?>" required/>
                                <label>Harga Jual</label>
                            </div>

                            <div class="form-group">
                            <label for="mitra">Mitra</label>
                                <select class="form-control" name="mitra" id="mitra" required>
                                    <option></option>
                                    <?php
                                        $t = $con->query("SELECT * FROM mitra");
                                        foreach ($t as $tt) {
                                    ?>
                                        <option value="<?php echo $tt['id_mitra'];?>" <?php if($rr['id_mitra']==$tt['id_mitra']){echo "selected"; } ?>><?php echo $tt['nama_mitra'];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-secondary">EDIT</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- / CONTENT -->
    </div>

</div>

<?php
    }
?>