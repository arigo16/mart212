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
                            <div class="h4">Mitra</div>
                            <?php
                                $result = $con->query("SELECT COUNT(*) FROM mitra");
                                $row = $result->fetch_row();
                            ?>
                            <div class="">Total Mitra: <?php echo $row[0]; ?></div>
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
                    <a href="index.php?page=mitra-add" class="btn btn-light">Tambah</a>
                </div>

            </div>
            <!-- / HEADER -->

            <div class="page-content-card">

                <table id="sample-data-table" class="table dataTable">
                    <thead>
                        <tr>
                            <th>
                                <div class="table-header">
                                    <span class="column-title">ID Mitra</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Mitra</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Alamat</span>
                                </div>
                            </th>

                            <th>
                                <div class="table-header">
                                    <span class="column-title">Telp</span>
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
                        $r = $con->query("SELECT * FROM mitra");
                        while ($rr = $r->fetch_array()) {
                    ?>

                        <tr>
                            <td><?php echo $rr['id_mitra'];?></td>
                            <td><?php echo $rr['nama_mitra'];?></td>
                            <td><?php echo $rr['alamat_mitra'];?></td>
                            <td><?php echo $rr['telp_mitra'];?></td>
                            <td class="text-center">
                                <a href="index.php?page=mitra-edit&id_mitra=<?php echo $rr['id_mitra'];?>" class="shortcut-button btn btn-icon mx-1">
                                    <i class="icon icon-pencil s-4"></i>
                                </a>
                                <a href="controller/act-mitra-del.php?id_mitra=<?php echo $rr['id_mitra'];?>" onclick="return confirm('Yakin ingin hapus data?')" class="shortcut-button btn btn-icon mx-1">
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