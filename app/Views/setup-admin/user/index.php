<?= $this->extend('setup-admin/template/default') ?>
<?= $this->section('title') ?>
User Management
<?= $this->endSection() ?>
<?= $this->section('css') ?>
<link href="admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-2 text-gray-800">User Management</h1>
<p class="mb-4">Menu mengatur jumlah admin yang dapat merubah landing page</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="d-flex card-header py-3 justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Jumlah Admin : <?= count($users) ?> </h6>
        <a type="button" class="btn btn-info" href="/create">Tambah Pengguna</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Acton</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($users as $data) : ?>
                        <tr>
                            <td><?= esc($no++) ?></td>
                            <td><?= esc($data['name']) ?></td>
                            <td><?= esc($data['username']) ?></td>
                            <td><?= esc($data['role']) ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<!-- Page level plugins -->
<script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/js/demo/datatables-demo.js"></script>
<?= $this->endSection() ?>