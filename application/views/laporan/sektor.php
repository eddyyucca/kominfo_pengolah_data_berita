<div class="page-content">
    <div class="container-fluid">
        <div class="box-typical box-typical-padding text-center">
            <h3>Cari Sektor</h3>
            <section class="card">
                <form action="<?= base_url('laporan/cari_sektor') ?>" method="post">
                    <div class="input-group mb-3 mt-3 ml-2 col-6">
                        <select id="exampleSelect" class="form-control" name="sektor">
                            <option value="">-- PILIH --</option>
                            <option value="Administrasi & pemerintahan">Administrasi & pemerintahan</option>
                            <option value="Sosial & kesehatan">Sosial & kesehatan</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Politik">Politik</option>
                            <option value="Hukum & keriminalitas">Hukum & keriminalitas</option>
                            <option value="infrastruktur">infrastruktur</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Transportasi">Transportasi</option>
                            <option value="Linkongan & satwa">Linkongan & satwa</option>
                            <option value="Kebencanaan">Kebencanaan</option>
                            <option value="Budaya & pariwisata">Budaya & pariwisata</option>
                            <option value="Kepemudaan & olahraga">Kepemudaan & olahraga</option>
                            <option value="Teknologi & informasi">Teknologi & informasi</option>
                            <option value="Perempuan & anak">Perempuan & anak</option>
                        </select>
                    </div>


                    <div class="form-group  mt-3 mr-3 ml-2">
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
                    $sektor = $sektor;
                ?>
                    <a href="<?= base_url('laporan/cari_sektor_excel/') . $x1, $x2, $sektor ?>" class="btn btn-primary mb-3">Print Excel</a>
                <?php } elseif ($excel == false) {
                } ?>
                <section class="card">
                    <div class="card-block">
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
                        </table>
                    <?php }
                                if ($data == false) {
                                }
                    ?>
                    </div>
                </section>
        </section>
    </div>
</div>