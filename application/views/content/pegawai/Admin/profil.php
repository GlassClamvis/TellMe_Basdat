<title>PROFILE</title>
</head>

<body>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title">My Profile</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form class="user" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" name="tm_pegawai_id" value="<?php echo $profilku['tm_pegawai_id']; ?>" require>
                                <input type="hidden" name="tm_login_id" value="<?php echo $profilku['tm_login_id']; ?>" require>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-center">
                                    <img class="img-circle elevation-2" src="<?= base_url() ?>upload/<?= $profilku['tm_pegawai_foto']; ?>" width="250px" height="250px">
                                </div>
                            </div>
                            <div class="form-group">
                                <a class='btn-edit' href="#" data-toggle="modal" data-target="#myModal">
                                    <p class='text-center'>Change Profile Picture</p>
                                </a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control form-control-user" id="tm_pegawai_nama" disabled name="tm_pegawai_nama" placeholder="Masukkan Nama  " value="<?php echo $profilku['tm_pegawai_nama']; ?>" require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control form-control-user" id="tm_login_username" disabled name="tm_login_username" placeholder="Masukkan Nama  " value="<?php echo $profilku['tm_login_username']; ?>" require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" class="form-control form-control-user" id="tm_pegawai_email" disabled name="tm_pegawai_email" placeholder="Masukkan Email " value="<?php echo $profilku['tm_pegawai_email']; ?>" require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIP</label>
                                <input type="text" class="form-control form-control-user" id="tm_pegawai_nip" disabled name="tm_pegawai_nip" placeholder="Masukkan NIP " value="<?php echo $profilku['tm_pegawai_nip']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control form-control-user" id="tm_login_password" disabled name="tm_login_password" placeholder="Masukkan Nama  " value="<?php echo $profilku['tm_login_password']; ?>" require>
                                <input type="checkbox" onclick="myFunction()">&nbsp;Show Password
                                <a class='btn-edit' href="#" data-toggle="modal" data-target="#Modalku">
                                    <p class='text-left'>Change Password</p>
                                </a>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Telp</label>
                                <input type="text" class="form-control form-control-user" id="tm_pegawai_no_telp" disabled name="tm_pegawai_no_telp" placeholder="Masukkan No. Telp " value="<?php echo $profilku['tm_pegawai_no_telp']; ?>" require>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control form-control-user" id="tm_pegawai_alamat" disabled name="tm_pegawai_alamat" placeholder="Masukkan Alamat" value="<?php echo $profilku['tm_pegawai_alamat']; ?>" require>
                            </div>
                            <div class="form-group">
                                <label for="Staff">Staff</label>
                                <input type="text" class="form-control form-control-user" id="tm_staff_nama" disabled name="tm_staff_nama" placeholder="Masukkan Alamat" value="<?php echo $profilku['tm_staff_label']; ?>" require>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-info btn-edit-modal" href="#" data-toggle="modal" data-target="#Modalprofil"><i class=" fas fa-edit fa-sm"></i>Edit Profile</a>
                            </div>
                            </br>
                            <div class="text-center"><a class="small" href="<?php echo base_url('Admin/Dashboard') ?>">Kembali</a></div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Modal ganti Pass-->
            <div id="Modalprofil" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <!-- konten modal-->
                    <div class="modal-content">
                        <!-- heading modal -->
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Profile</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                        <form class="user" action="<?php echo base_url('Admin/profil/editprofil'); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" name="tm_pegawai_id" value="<?php echo $profilku['tm_pegawai_id']; ?>" require>
                                    <input type="hidden" name="tm_login_id" value="<?php echo $profilku['tm_login_id']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIP</label>
                                    <input type="text" class="form-control form-control-user" id="tm_pegawai_nip" name="tm_pegawai_nip" placeholder="Masukkan NIP " value="<?php echo $profilku['tm_pegawai_nip']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control form-control-user" id="tm_login_username" name="tm_login_username" placeholder="Masukkan Username  " value="<?php echo $profilku['tm_login_username']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control form-control-user" id="tm_pegawai_nama" name="tm_pegawai_nama" placeholder="Masukkan Nama  " value="<?php echo $profilku['tm_pegawai_nama']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" class="form-control form-control-user" id="tm_pegawai_email" name="tm_pegawai_email" placeholder="Masukkan Email " value="<?php echo $profilku['tm_pegawai_email']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Telp</label>
                                    <input type="text" class="form-control form-control-user" id="tm_pegawai_no_telp" name="tm_pegawai_no_telp" placeholder="Masukkan No. Telp " value="<?php echo $profilku['tm_pegawai_no_telp']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control form-control-user" id="tm_pegawai_alamat" name="tm_pegawai_alamat" placeholder="Masukkan Alamat" value="<?php echo $profilku['tm_pegawai_alamat']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="ComboBoxStaff">Staff</label>
                                    <select class="form-control form-control-user" id="tm_staff_id" name="tm_staff_id" require>
                                        <?php foreach ($staffku as $baris) { ?>
                                            <option value="<?= $baris['tm_staff_id']; ?>"><?= $baris['tm_staff_label']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- footer modal -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal ganti Pass-->
            <div id="Modalku" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <!-- konten modal-->
                    <div class="modal-content">
                        <!-- heading modal -->
                        <div class="modal-header">
                            <h4 class="modal-title">Ganti Password</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                        <form class="user" action="<?php echo base_url('Admin/profil/changePP'); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" name="tm_pegawai_id" value="<?php echo $profilku['tm_pegawai_id']; ?>" require>
                                    <input type="hidden" name="tm_login_id" value="<?php echo $profilku['tm_login_id']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Old Password :</label>
                                    <input type="password" class="form-control form-control-user" id="tm_login_password1" disabled name="tm_login_password" value="<?php echo $profilku['tm_login_password']; ?>" require>
                                    <input type="checkbox" onclick="Functionku1()">&nbsp;Show Password
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Password :</label>
                                    <input type="password" class="form-control form-control-user" id="tm_login_password_new" name="tm_login_password_new" placeholder="Masukkan Password baru  " require>
                                    <input type="checkbox" onclick="Functionku()">&nbsp;Show Password
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Re-Type Password :</label>
                                    <input type="password" class="form-control form-control-user" id="tm_login_password_renew" name="tm_login_password_renew" placeholder="Masukkan Password Kembali  " require>
                                    <input type="checkbox" onclick="Functionku2()">&nbsp;Show Password
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- footer modal -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal ganti Photo-->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <!-- konten modal-->
                    <div class="modal-content">
                        <!-- heading modal -->
                        <div class="modal-header">
                            <h4 class="modal-title">Ganti Profile Picture</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                        <form class="user" action="<?php echo base_url('Admin/profil/changePP'); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" name="tm_pegawai_id" value="<?php echo $profilku['tm_pegawai_id']; ?>" require>
                                    <input type="hidden" name="tm_login_id" value="<?php echo $profilku['tm_login_id']; ?>" require>
                                    <input type="hidden" name="filelama" value="<?php echo $profilku['tm_pegawai_foto'] ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto" placeholder="Input Foto" aria-describedby="inputGroupPrepend" onchange="previewImage();" require>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Profile Picture :</label>
                                    <div class="d-flex justify-content-center">
                                        <br />
                                        <img class="img-thumbnail" id="image-preview" alt="image preview" />
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- footer modal -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("tm_login_password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function Functionku() {
            var x = document.getElementById("tm_login_password_new");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function Functionku1() {
            var x = document.getElementById("tm_login_password1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function Functionku2() {
            var x = document.getElementById("tm_login_password_renew");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function previewImage() {
            document.getElementById("image-preview").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("foto").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>