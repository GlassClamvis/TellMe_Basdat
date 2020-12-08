<?php $this->load->view("templates/head.php") ?>
<?php $this->load->view("templates/header_mahasiswa.php") ?>

<div class="container page__container">
    <form action="<?= base_url('Mahasiswa/Student/ubah_password'); ?>" method="post">
        <div class="row">
            <div class="col-lg-9">

                <div class="page-section">
                    <h4>Change Password</h4>
                    <?= $this->session->flashdata('message'); ?>
                    <!-- <div class="alert alert-light border-1 border-left-3 border-left-accent d-flex mb-24pt" role="alert">
                        <i class="material-icons text-accent mr-3">check_circle</i>
                        <div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
                    </div> -->

                    <div class="list-group list-group-form">
                      <div class="list-group-item">
                          <div class="form-group row mb-0">
                              <label class="col-form-label col-sm-3">Password lama</label>
                              <div class="col-sm-9">
                                  <input type="password" name="password_lama" id="password_lama" class="form-control" >
                                  <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                          </div>
                      </div>
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label col-sm-3">Password baru</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_baru" id="password_baru" class="form-control">
                                    <?= form_error('password_baru', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label col-sm-3">Konfirmasi password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="konfirmasi_password" id="konfirmasi_password" class="form-control">
                                    <?= form_error('konfirmasi_password', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 page-nav">
                <div class="page-section pt-lg-112pt">
                    <nav class="nav page-nav__menu">
                      <a class="nav-link" href="<?php echo base_url('Mahasiswa/Student/edit/'.$_SESSION['id_mahasiswa']); ?>">Basic Information</a>
                      <a class="nav-link" href="<?php echo base_url('Mahasiswa/Student/upload_foto/'.$_SESSION['id_mahasiswa']); ?>">Photo Profile</a>
                      <a class="nav-link active" href="<?php echo base_url('Mahasiswa/Student/ubah_password/'.$_SESSION['id_mahasiswa']); ?>">Change Password</a>
                    </nav>
                    <div class="page-nav__content">
                        <button type="submit" class="btn btn-accent">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $this->load->view("templates/footer.php") ?>
<?php $this->load->view("templates/js.php") ?>
