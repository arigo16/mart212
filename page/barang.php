<div class="content custom-scrollbar">

    <div id="e-commerce-products" class="page-layout carded full-width">

        <div class="top-bg bg-secondary"></div>

        <!-- CONTENT -->
        <div class="page-content-wrapper">

            <!-- HEADER -->
            <div class="page-header light-fg row no-gutters align-items-center justify-content-between">

                <!-- APP TITLE -->
                <div class="col-12 col-sm">

                    <div class="logo row no-gutters justify-content-center align-items-start justify-content-sm-start">
                        <div class="logo-icon mr-3 mt-1">
                            <i class="icon-cube-outline s-6"></i>
                        </div>
                        <div class="logo-text">
                            <div class="h4">Barang</div>
                            <?php
                                $result = $con->query("SELECT COUNT(*) FROM barang");
                                $row = $result->fetch_row();
                            ?>
                            <div class="">Total Barang: <?php echo $row[0]; ?></div>
                        </div>
                    </div>

                </div>
                <!-- / APP TITLE -->

                <!-- SEARCH -->
                <div class="col search-wrapper px-2">

                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-icon">
                                <i class="icon icon-magnify"></i>
                            </button>
                        </span>
                        <input id="search-input" type="text" class="form-control" placeholder="Search" aria-label="Search" />
                    </div>

                </div>
                <!-- / SEARCH -->

                <div class="col-auto">
                    <a href="index.php?page=barang-add" class="btn btn-light">Tambah</a>
                </div>

            </div>
            <!-- / HEADER -->

            <div class="page-content-card">

                <table id="sample-data-table" class="table dataTable">
                    <thead>
                        <tr>
                            <th>
                                <div class="table-header">
                                    <span class="column-title">Kode</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Barang</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Satuan</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Kategori</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Harga Beli</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Harga Jual</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Stok</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Mitra</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header text-center">
                                    <span>Aksi</span>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                        $r = $con->query("SELECT barang.id_barang,barang.nama_barang, barang.satuan_barang, kategori.nama_kategori, barang.harga_beli, barang.harga_jual, barang.stock_barang, mitra.nama_mitra FROM mitra INNER JOIN (kategori INNER JOIN barang ON kategori.id_kategori = barang.id_kategori) ON mitra.id_mitra = barang.id_mitra");
                        while ($rr = $r->fetch_array()) {
                    ?>

                        <tr>
                            <td><?php echo $rr['id_barang'];?></td>
                            <td><?php echo $rr['nama_barang'];?></td>
                            <td><?php echo $rr['satuan_barang'];?></td>
                            <td><?php echo $rr['nama_kategori'];?></td>
                            <td><?php echo $rr['harga_beli'];?></td>
                            <td><?php echo $rr['harga_jual'];?></td>
                            <td><?php echo $rr['stock_barang'];?></td>
                            <td><?php echo $rr['nama_mitra'];?></td>
                            <td class="text-center">
                                <a href="index.php?page=barang-edit&id_barang=<?php echo $rr['id_barang'];?>" class="shortcut-button btn btn-icon mx-1">
                                    <i class="icon icon-pencil s-4"></i>
                                </a>
                                <a href="controller/act-barang-del.php?id_barang=<?php echo $rr['id_barang'];?>" onclick="return confirm('Yakin ingin hapus data?')" class="shortcut-button btn btn-icon mx-1">
                                    <i class="icon icon-trash s-4"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- / CONTENT -->
    </div>
</div>