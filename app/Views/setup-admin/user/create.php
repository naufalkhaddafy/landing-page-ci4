<?= $this->extend('setup-admin/template/default') ?>
<?= $this->section('title') ?>
Menambahkan User
<?= $this->endSection() ?>
<?= $this->section('css') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-2 text-gray-800">Add User</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <p>Menu menambahkan role admin</p>
        </h6>
    </div>
    <div class="card-body">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account Admin!</h1>
        </div>
        <form class="user" method="post" action="<?php echo base_url('create'); ?>">
            <?= csrf_field() ?>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="firstName" name="firstName" placeholder="First Name">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="lastName" name="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="confirm-password" name="confirm-password" placeholder="Repeat Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Register Account
            </button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('js') ?>
<?= $this->endSection() ?>