<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
    Tambah Data Pendaping
</button>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Nama Pendamping</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pendamping</label>
                            <input type="text" class="form-control" id="nama_pendamping" placeholder="Masukan Nama">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="card-body" style="width: 500px;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Nama </th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($pendamping as $key => $value) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $value['nama_pendamping']; ?></td>
                    <td>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>