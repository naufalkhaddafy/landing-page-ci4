<?= $this->extend('setup-admin/template/default') ?>
<?= $this->section('title') ?>
User Management
<?= $this->endSection() ?>
<?= $this->section('css') ?>
<link href="<?php echo base_url('admin/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-2 text-gray-800">User Management</h1>
<p class="mb-4">Menu mengatur jumlah admin yang dapat merubah landing page</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="d-flex card-header py-3 justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Jumlah Admin : <?= count($users) ?> </h6>
        <a type="button" class="btn btn-success" href="/create/user"><i class="fa fa-plus"></i> Tambah</a>
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
                        <th>Actin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($users as $data) : ?>
                        <tr>
                            <td><?= esc($no++) ?></td>
                            <td><?= esc($data['name']) ?></td>
                            <td><?= esc($data['username']) ?></td>
                            <td><?= esc($data['role']) == 1 ? 'Admin' : 'tidak ada' ?></td>
                            <td align="center">
                                <a class="btn btn-warning" href="/update/user/<?= esc($data['id']) ?>"><i class="fa fa-fas fa-external-link-alt"></i></a>
                                <a class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= esc($data['id']) ?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Delete Modal-->
<?php foreach ($users as $data) : ?>

    <div class="modal fade" id="deleteModal<?= esc($data['id']) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete User?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda ingin menghapus data user <?= esc($data['name']) ?> ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url('/delete/user/' . esc($data['id'])) ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?= $this->endSection() ?>
<?= $this->section('js') ?>
<!-- Page level plugins -->
<script src="<?php echo base_url('admin/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('admin/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('admin/js/demo/datatables-demo.js'); ?>"></script>
<?= $this->endSection() ?>