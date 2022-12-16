<?= $this->extend('setup-admin/template/default') ?>
<?= $this->section('title') ?>
Mengubah User
<?= $this->endSection() ?>
<?= $this->section('css') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-2 text-gray-800">Update User</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <p>Menu Mengubah data admin</p>
        </h6>
    </div>
    <div class="card-body">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Update an Account Admin!</h1>
        </div>
        <form class="user" method="post" action="<?php echo base_url('/update/user/' . esc($data['id'])); ?>">
            <?= csrf_field() ?>
            <div class="form-group ">
                <label for="name">Nama Lengkap<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-user" id="name" name="name" value="<?php echo $data['name']; ?>" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="name">Usermame<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-user" id="username" name="username" value="<?php echo $data['username']; ?>" placeholder="Username">
            </div>
            <label for="name">Password<span class="text-danger">*</span></label>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="confirm-password" name="confirm-password" placeholder="Repeat Password">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a type="button" href="/user" class="btn btn-danger btn-user">
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary btn-user">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<?= $this->endSection() ?>