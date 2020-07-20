<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h2>Data Berita</h2>
                        <div class="subtitle">Welcome to Ultimate Dashboard</div>
                    </div>
                </div>
            </div>
        </header>
        <section class="card">
            <div class="card-block">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Sektor</th>
                            <th>sentimen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_berita as $x) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= substr($x->judul, 0, 45);  ?></td>
                                <td><?= $x->sektor; ?></td>
                                <td><?= $x->sentimen; ?></td>
                                <td align="center"><a class="btn btn-primary" href="<?= base_url('admin/edit/') . $x->id; ?>">Edit</a>
                                    <a class="btn btn-danger" onclick="return confirm('Yakin Hapus?')" href="<?= base_url('admin/hapus/')  . $x->id; ?>">Hapus</a>
                                    <a class="btn btn-warning" href="<?= base_url('admin/tampil/') . $x->id; ?>">Lihat</a></td>
                            <?php } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>