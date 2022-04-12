<?=$this->extend('template/index2') ?>
<?=$this->section('content') ?>
<section>
<body onload="window.print()">
    <table class="table table-bordered">
        <thead>
                <tr style="font-weight:bold">
                    <td>ID Perjalanan</td>
                    <td>Nama</td>
                    <td>Lokasi</td>
                    <td>Tanggal</td>
                    <td>Waktu</td>
                    <td>Catatan</td>
                </tr>
        </thead>
        <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($tb_perjalanan as $row) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $row['id_user'] ?></td>
                      <td><?= $row['lokasi'] ?></td>
                      <td><?= $row['tanggal'] ?></td>
                      <td><?= $row['waktu'] ?></td>
                      <td><?= $row['ket'] ?></td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
        </tbody>
    </table>
    <p>Jumlah data : <?= $jumlahcp ?></p>
    </section>
</body>

</html>
<?=$this->endSection(); ?>