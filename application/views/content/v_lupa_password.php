<?php $this->load->view("templates/head.php") ?>
<?php $this->load->view("templates/header.php") ?>
<!-- Header Layout Content -->
<div class="mdk-header-layout__content page-content pb-0">

    <div class="bg-gradient-primary py-32pt">
        <div class="container d-flex flex-column flex-sm-row align-items-sm-center">
            <div class="flex">
                <h1 class="text-white flex mb-0">Lupa Password</h1>
                <p class="lead text-white-50">Account Management</p>
            </div>

        </div>
    </div>
    <div class="page-section ">
        <div class="container page__container">
            <div class="col-sm-6 mx-auto">

                <?= $this->session->flashdata('message'); ?>

                <form class="user" method="post" action="<?= base_url('auth/lupa_password'); ?>">

                    <div class="form-group">
                        <label>NIM :</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM anda ..." value="<?= set_value('nim'); ?>">
                        <?= form_error('nim', '<small class="text-danger">', '</small>'); ?>

                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email anda..." value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-accent btn-lg">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</div>
<?php $this->load->view("templates/footer.php") ?>
<?php $this->load->view("templates/js.php") ?>
<!-- // END Header Layout -->