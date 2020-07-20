<div class="page-content">
    <div class="container-fluid">
        <div class="box-typical box-typical-padding">
            <h3>ini form input</h3>
            <hr>
            <form action="<?= base_url('admin/prosesinput/') ?>" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Judul</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" name="judul" placeholder="tambahakan judul"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Tanggal</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"> <input type="date" class="form-control" name="tanggal"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Sumber</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" name="sumber" placeholder="tambahakan link"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Sektor</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" class="form-control" name="sektor">
                            <option value="">-- PILIH --</option>
                            <?php foreach ($sektor as $row) { ?>
                                <option value="<?= $row->nama_sektor ?>"><?= $row->nama_sektor ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleSelect" class="col-sm-2 form-control-label">Sentimen</label>
                    <div class="col-sm-10">
                        <select id="exampleSelect" name="sentimen" class="form-control">
                            <option>-- PILIH --</option>
                            <?php foreach ($sentimen as $row) { ?>
                                <option value="<?= $row->nama_sentimen ?>"><?= $row->nama_sentimen ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Tautan</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">http://</span></div>
                                <input type="text" placeholder="Link berita" name="tautan" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Rekomendasi</label>
                    <div class="col-sm-10">
                        <textarea rows="4" name="rekomendasi" class="form-control" placeholder="Tambahkan rekomendasi"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Sarana</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" name="sarana" placeholder="tambahakan Sarana"></p>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">ringkasan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="ringkasan" placeholder="ringkasan"></textarea>
                    </div>
                </div>


                <button class="btn btn-primary" type="submit">simpan</button>
            </form>
        </div>
    </div>
</div>