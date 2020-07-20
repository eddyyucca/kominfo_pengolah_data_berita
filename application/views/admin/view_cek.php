<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h2><?= $data->judul; ?></h2>
                        <div class="subtitle"><?= $data->sumber; ?></div>
                    </div>
                </div>
            </div>
        </header>
        <section class="card">
            <div class="card-block">
                <table class="table">
                    <tr>
                        <td><b>Tanggal</b></td>
                        <td><?= $data->tanggal; ?></td>
                    </tr>
                    <tr>
                        <td><b>Sektor</b></td>
                        <td><?= $data->sektor; ?></td>
                    </tr>
                    <tr>
                        <td><b>Sentimen</b></td>
                        <td><?= $data->sentimen; ?></td>
                    </tr>
                    <tr>
                        <td><b>Tautan</b></td>
                        <td><?= $data->tautan; ?></td>
                    </tr>
                    <tr>
                        <td><b>Ringakasan</b></td>
                        <td><?= $data->ringkasan; ?></td>
                    </tr>
                    <tr>
                        <td><b>Rekomendasi</b></td>
                        <td><?= $data->rekomendasi; ?></td>
                    </tr>
                    <tr>
                        <td><b>Sarana</b></td>
                        <td><?= $data->sarana; ?></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?= base_url('admin/berita_disetujui/' . $data->id) ?>" class="btn btn-primary">Disetujui</a>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
</div>