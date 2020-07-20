<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h2>Data Akun</h2>
                        <hr>
                        <a href="<?= base_url('akun/tambah_akun'); ?>" class="btn btn-primary">Tambah Akun</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="card">
            <div class="card-block">
                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $x) { ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $x->username; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('akun/edit_akun/' . $x->id) ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('akun/hapus_akun/' . $x->id) ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>