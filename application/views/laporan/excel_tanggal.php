<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DAILY REPORT ANALISIS PEMBERITAAN  $xx1 SAMPAI $xx2.xls");
?>
<table border=1>
    <thead>
        <tr>
            <th colspan="9">DAILY REPORT ANALISIS PEMBERITAAN</th>
        </tr>
        <tr>
            <th colspan="9">PROVENSI KALIMANTAN SELATAN EDISI <?= $xx1;
                                                                echo ' SAMPAI';
                                                                echo ' ';
                                                                echo $xx2; ?></th>
        </tr>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>tanggal</th>
            <th>sumber</th>
            <th>tautan</th>
            <th>rekomendasi</th>
            <th>Sektor</th>
            <th>sentimen</th>
            <th>sarana</th>

        </tr>
    </thead>


    <?php
    if ($xx == true) {

        $no = 1;
        foreach ($xx as $x) { ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $x->judul;  ?></td>
                    <td><?= $x->tanggal;  ?></td>
                    <td><?= $x->sumber;  ?></td>
                    <td><?= $x->tautan;  ?></td>
                    <td><?= $x->rekomendasi;  ?></td>
                    <td><?= $x->sektor; ?></td>
                    <td><?= $x->sentimen; ?></td>
                    <td><?= $x->sarana; ?></td>

                <?php } ?>
                </tr>
            </tbody>
        <?php }
    if ($xx == false) {
    }
        ?>
</table>