<?php $this->load->view("templates/head.php") ?>
<?php $this->load->view("templates/header_mahasiswa.php") ?>

<div class="mdk-header-layout__content page-content ">

  <?php
  foreach ($mahasiswa as $data_mahasiswa) { ?>

    <div class="container page__container">
        <form method="post" name="upload_foto" action="<?php echo base_url('Mahasiswa/Student/upload_foto'); ?>" enctype="multipart/form-data">
            <div class="row">

              <div class="col-lg-9">

                  <div class="page-section">
                      <h4>Photo Profile</h4>
                      <div class="list-group list-group-form">
                          <div class="list-group-item">
                              <div class="form-group row mb-0">
                                <div class="col-sm-2">Your Photo</div>
                                <div class="col-sm-10">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <img src="<?php echo base_url('assets/tealdark/profil/'.$data_mahasiswa->tm_mahasiswa_foto);?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="berkas" id="berkas">
                                        <label class="custom-file-label" for="berkas">Choose file</label>
                                        <input type="hidden" value="<?php echo $this->session->userdata('id_mahasiswa'); ?>">
                                      </div>
                                    </div>
                                  </div>
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
                          <a class="nav-link active" href="<?php echo base_url('Mahasiswa/Student/upload_foto/'.$_SESSION['id_mahasiswa']); ?>">Photo Profile</a>
                          <a class="nav-link" href="<?php echo base_url('Mahasiswa/Student/ubah_password/'.$_SESSION['id_mahasiswa']); ?>">Change Password</a>
                        </nav>
                        <div class="page-nav__content">
                            <button type="submit" class="btn btn-accent">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <?php } ?>

  </div>

</div>

<input type="hidden" name="mahasiswa_id" value="<php echo $data_mahasiswa->tm_mahasiswa_id; ?>">

<?php $this->load->view("templates/footer.php") ?>
<?php $this->load->view("templates/js.php") ?>
