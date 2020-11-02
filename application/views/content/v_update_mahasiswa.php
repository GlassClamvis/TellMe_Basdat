<?php $this->load->view("templates/head.php") ?>
<?php $this->load->view("templates/header_mahasiswa.php") ?>

<div class="mdk-header-layout__content page-content ">

  <?php
  foreach ($mahasiswa as $data_mahasiswa) { ?>

    <div class="container page__container">
        <form method="post" name="edit_data_mahasiswa" action="<?php echo base_url('student/update'); ?>">
            <div class="row">
                <div class="col-lg-9">

                    <div class="page-section">
                        <h4>Basic Information</h4>
                        <div class="list-group list-group-form">
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mahasiswa_nama" class="form-control" value="<?php echo $data_mahasiswa->tm_mahasiswa_nama; ?>" placeholder="Your name ...">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">NIM</label>
                                    <div class="col-sm-9">

                                    </div>
                                </div>
                            </div> -->
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Jurusan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mahasiswa_jurusan" class="form-control" value="<?php echo $data_mahasiswa->tm_mahasiswa_jurusan; ?>" placeholder="Your Jurusan ...">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Program Studi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mahasiswa_prodi" class="form-control" value="<?php echo $data_mahasiswa->tm_mahasiswa_prodi; ?>" placeholder="Your Prodi ...">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Semester</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mahasiswa_semester" class="form-control" value="<?php echo $data_mahasiswa->tm_mahasiswa_semester; ?>" placeholder="Your Semester ...">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="mahasiswa_lahir" class="form-control" value="<?php echo $data_mahasiswa->tm_mahasiswa_tanggal_lahir; ?>" placeholder="Your Tanggal Lahir ...">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Email address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="mahasiswa_email" class="form-control" value="<?php echo $data_mahasiswa->tm_mahasiswa_email ?>" placeholder="Your email address ...">
                                        <small class="form-text text-muted">Note that if you change your email, you will have to confirm it again.</small>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="mahasiswa_nim" class="form-control" value="<?php echo $data_mahasiswa->tm_mahasiswa_nim; ?>" placeholder="Your NIM ...">
                            <input type="hidden" name="mahasiswa_id" value="<?php echo $data_mahasiswa->tm_mahasiswa_id; ?>">
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 page-nav">
                    <div class="page-section pt-lg-112pt">
                        <nav class="nav page-nav__menu">
                            <a class="nav-link active" href="<?php echo base_url('student/edit/'.$_SESSION['id_mahasiswa']); ?>">Basic Information</a>
                            <a class="nav-link" href="<?php echo base_url('student/edit_foto/'.$_SESSION['id_mahasiswa']); ?>">Photo Profile</a>
                            <a class="nav-link" href="student-edit-account-password.html">Change Password</a>
                        </nav>
                        <div class="page-nav__content">
                            <button type="submit" class="btn btn-accent">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

      <?php } ?>

    </div>

  </div>

</div>
<?php $this->load->view("templates/footer.php") ?>
<?php $this->load->view("templates/js.php") ?>
