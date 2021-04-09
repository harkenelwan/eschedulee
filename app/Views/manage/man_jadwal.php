<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Hari/Tanggal</th>
                <th>Acara</th>
                <th>Terundang</th>
                <th>Pendamping</th>
                <th>Tempat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jadwal as $key => $value) { ?>
                <tr>
                    <td><?= $value['waktu']; ?></td>
                    <td><?= $value['nama_acara']; ?>
                    </td>
                    <td><?= $value['nama_terundang']; ?></td>
                    <td> <?= $value['nama_pendamping']; ?></td>
                    <td><?= $value['tempat']; ?></td>
                    <td></td>
                </tr>
            <?php } ?>
    </table>
</div>

<?= $this->endSection(); ?>