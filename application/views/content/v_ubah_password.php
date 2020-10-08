<?php $this->load->view("templates/head.php") ?>
<?php $this->load->view("templates/header.php") ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content page-content pb-0">
    <div class="bg-gradient-primary py-32pt">
        <div class="container d-flex flex-column flex-sm-row align-items-sm-center">
            <div class="flex">
                <h1 class="text-white flex mb-0">Reset Password</h1>
                <p class="text-white-50 lead">Account Management</p>
            </div>
            <p class="d-sm-none"></p>

        </div>
    </div>
    <div class="page-section ">
        <div class="container page__container">
            <form class="user" method="post" action="<?= base_url('auth/ubahPassword'); ?>" class="col-sm-5 mx-auto">
                <div class="form-group">
                    <label for="password1">Password Baru :</label>
                    <input id="password1" type="password" class="form-control" name="password1" placeholder="Masukkan password baru anda ...">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="password2">Konfirmasi Password Baru:</label>
                    <input id="password2" type="password" class="form-control" name="password2" placeholder="Konfirmasi password baru anda ...">
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-accent btn-lg">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer.php") ?>
<?php $this->load->view("templates/js.php") ?>
<!-- // END Header Layout -->