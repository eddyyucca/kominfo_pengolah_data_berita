<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <style>
        th .a {
            height: 50px;
            padding-left: 10px;
            vertical-align: top;

        }

        table {
            border-collapse: collapse;
        }

        tr .bungkus {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table border="3" class="c">


            <tr>
                <th rowspan="2"><img src="<?= base_url('assets/logo.jpg') ?>" alt="Logo" width="50"></th>
                <th colspan="2">DAILY REPORT ANALISIS PEMBERITAAN</th>
            </tr>
            <tr>
                <th colspan="2">PROVENSI KALIMANTAN SELATAN EDISI <?= $data->tanggal; ?></th>
            </tr>

            <tr align="left">
                <th>1</th>
                <th>Judul</th>
                <th><?= $data->judul; ?></th>
            </tr>

            <tr align="left">
                <th>2</th>
                <th>Sektor</th>
                <th><?= $data->sektor; ?></th>
            </tr>
            <tr align="left">
                <th>3</th>
                <th>Sentimen</th>
                <th><?= $data->sentimen; ?></th>
            </tr>
            <tr align="left">
                <th>4</th>
                <th>Tautan</th>
                <th><?= $data->tautan; ?></th>
            </tr>
            <tr align="left">
                <th>5</th>
                <th>Ringkasan</th>
                <th><?= $data->ringkasan; ?></th>
            </tr>
            <tr align="left">
                <th>6</th>
                <th>Rekomendasi</th>
                <th><?= $data->rekomendasi; ?></th>
            </tr>
            <tr align="left">
                <th>7</th>
                <th>Sarana</th>
                <th><?= $data->sarana; ?></th>
            </tr>
        </table>
    </div>
</body>
<script>
    window.print()
</script>

</html>