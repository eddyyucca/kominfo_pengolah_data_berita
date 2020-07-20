<div class="page-content">
    <div class="container-fluid">
        <div class="box-typical box-typical-padding">
            <h3>Form Edit</h3>
            <hr>
            <form action="<?= base_url('user/prosesedit/') . $data->id; ?>" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Judul</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" value="<?= $data->judul; ?>" name="judul" placeholder="tambahakan judul"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Tanggal</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"> <input type="date" value="<?= $data->tanggal; ?>" class="form-control" name="tanggal"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Sumber</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" value="<?= $data->sumber; ?>" name="sumber" placeholder="tambahakan link"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Sektor</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" class="form-control" name="sektor">
                            <option value="">-- PILIH --</option>

                            <option value="Administrasi & pemerintahan" <?= "Administrasi & pemerintahan" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Administrasi & pemerintahan</option>
                            <option value="Sosial & kesehatan" <?= "Administrasi & pemerintahan" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Sosial & kesehatan</option>
                            <option value="Ekonomi" <?= "Ekonomi" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Ekonomi</option>
                            <option value="Politik" <?= "Politik" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Politik</option>
                            <option value="Hukum & keriminalitas" <?= "Hukum & keriminalitas" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Hukum & keriminalitas</option>
                            <option value="infrastruktur" <?= "infrastruktur" ==  $data->sektor  ? 'selected=selected' : ''; ?>>infrastruktur</option>
                            <option value="Pendidikan" <?= "Pendidikan" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Pendidikan</option>
                            <option value="Transportasi" <?= "Transportasi" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Transportasi</option>
                            <option value="Linkongan & satwa" <?= "Linkongan & satwa" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Linkongan & satwa</option>
                            <option value="Kebencanaan" <?= "Kebencanaan" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Kebencanaan</option>
                            <option value="Budaya & pariwisata" <?= "Budaya & pariwisata" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Budaya & pariwisata</option>
                            <option value="Kepemudaan & olahraga" <?= "Kepemudaan & olahraga" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Kepemudaan & olahraga</option>
                            <option value="Teknologi & informasi" <?= "Teknologi & informasi" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Teknologi & informasi</option>
                            <option value="Perempuan & anak" <?= "Perempuan & anak" ==  $data->sektor  ? 'selected=selected' : ''; ?>>Perempuan & anak</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Sentimen</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" name="sentimen" class="form-control">
                            <option>-- PILIH --</option>
                            <option value="Negatif" <?= "Negatif" ==  $data->sentimen  ? 'selected=selected' : ''; ?>>Negatif</option>
                            <option value="Netral" <?= "Netral" ==  $data->sentimen  ? 'selected=selected' : ''; ?>>Netral</option>
                            <option value="Positif" <?= "Positif" ==  $data->sentimen  ? 'selected=selected' : ''; ?>>Positif</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Tautan</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">http://</span></div>
                                <input type="text" placeholder="Link berita" value="<?= $data->tautan; ?>" name="tautan" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Rekomendasi</label>
                    <div class="col-sm-10">
                        <textarea rows="4" name="rekomendasi" class="form-control" placeholder="Tambahkan rekomendasi"><?= $data->rekomendasi; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Sarana</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" value="<?= $data->sarana; ?>" name="sarana" placeholder="tambahakan Sarana"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">ringkasan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="ringkasan" placeholder="ringkasan"><?= $data->ringkasan; ?></textarea>
                    </div>
                </div>


                <button class="btn btn-primary" type="submit">simpan</button>
            </form>
        </div>
    </div>
</div>