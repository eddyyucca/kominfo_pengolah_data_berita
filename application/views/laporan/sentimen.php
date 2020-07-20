<div class="page-content">
    <div class="container-fluid">
        <div class="box-typical box-typical-padding text-center">
            <h3>Cari Sentimen</h3>
            <section class="card">
                <form action="<?= base_url('laporan/cari_sentimen') ?>" method="post">
                    <div class="input-group mb-3 mt-3 ml-2 col-6">
                        <select id="exampleSelect" name="sentimen" class="form-control">
                            <option value="">-- PILIH --</option>
                            <option value="Negatif">Negatif</option>
                            <option value="Netral">Netral</option>
                            <option value="Positif">Positif</option>
                        </select>
                    </div>

                    <div class="form-group  mb-3 mt-3 ml-2">
                        <div class="col-sm-6">
                            <p class="form-control-static"> <input type="date" class="form-control" name="tanggal_1"></p>
                            <label class="col-sm mb-2 form-control-label">Sampai</label>
                            <p class="form-control-static"> <input type="date" class="form-control" name="tanggal_2"></p>
                            <button class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
        </div>
        </section>
        <section class="card">
            <div class="card-block">
                <?php
                if ($excel == true) {

                    $x1 = $tgl1;
                    $x2 = $tgl2;
                    $sentimen = $sentimen;
                ?>
                    <a href="<?= base_url('laporan/cari_sentimen_excel/') . $x1, $x2, $sentimen ?>" class="btn btn-primary mb-3">Print Excel</a>
                <?php } elseif ($excel == false) {
                } ?>
                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
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
                        if ($data == true) {

                            $no = 1;
                            foreach ($data as $x) { ?>
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
                <?php }
                        if ($data == false) {
                        }
                ?>
                </table>
        </section>
    </div>
</div>