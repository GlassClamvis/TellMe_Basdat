<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php foreach ($mhs as $baris) { ?>
              <form class="user" action="<?php echo base_url('Admin/DataMahasiswa/Data_mhs/update'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="tm_mahasiswa_id" value="<?php echo $baris->tm_mahasiswa_id; ?>" require>
                    <input type="hidden" name="tm_login_id" value="<?php echo $baris->tm_login_id; ?>" require>
                    <input type="hidden" name="filelama" value="<?php echo $baris->tm_mahasiswa_foto ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIM</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_nim" name="tm_mahasiswa_nim" placeholder="Masukkan NIM " value="<?php echo $baris->tm_mahasiswa_nim; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control form-control-user" id="tm_login_username" name="tm_login_username" placeholder="Masukkan Nama  " value="<?php echo $baris->tm_login_username; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control form-control-user" id="tm_login_password" name="tm_login_password" placeholder="Masukkan Nama  " value="<?php echo $baris->tm_login_password; ?>" require>
                    <input type="checkbox" onclick="myFunction()">&nbsp;Show Password
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_nama" name="tm_mahasiswa_nama" placeholder="Masukkan Nama  " value="<?php echo $baris->tm_mahasiswa_nama; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_email" name="tm_mahasiswa_email" placeholder="Masukkan Email " value="<?php echo $baris->tm_mahasiswa_email; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. Telp</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_telp" name="tm_mahasiswa_telp" placeholder="Masukkan No. Telp " value="<?php echo $baris->tm_mahasiswa_telp; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jurusan</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_jurusan" name="tm_mahasiswa_jurusan" placeholder="Masukkan Jurusan  " value="<?php echo $baris->tm_mahasiswa_jurusan; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prodi</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_prodi" name="tm_mahasiswa_prodi" placeholder="Masukkan Prodi" value="<?php echo $baris->tm_mahasiswa_prodi; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Semester</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_semester" name="tm_mahasiswa_semester" placeholder="Masukkan Semester " value="<?php echo $baris->tm_mahasiswa_semester; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_alamat" name="tm_mahasiswa_alamat" placeholder="Masukkan Alamat" value="<?php echo $baris->tm_mahasiswa_alamat; ?>" require>
                  </div>
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-user" id="tm_mahasiswa_tanggal_lahir" name="tm_mahasiswa_tanggal_lahir" value="<?php echo $baris->tm_mahasiswa_tanggal_lahir; ?>" require>
                                </div>
                                <div class="form-group">
                    <label for="exampleInputEmail1">Point</label>
                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_point" name="tm_mahasiswa_point" placeholder="Masukkan Point.." value="<?php echo $baris->tm_mahasiswa_alamat; ?>">
                  </div>
                  <div class="form-group">
                                    <label for="exampleInputFile">Foto input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto" placeholder="Input Foto" onchange="previewImage();" aria-describedby="inputGroupPrepend" require>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Tampilan Foto :</label>
                                    <div class="d-flex justify-content-center">
                                        <br />
                                        <img class="img-thumbnail" id="image-preview" alt="image preview" />
                                    </div>
                                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <div class="text-center"><a class="small" href="<?php echo base_url('Admin/DataMahasiswa/Data_mhs/index') ?>">Kembali</a></div>
                </div>
              </form> <?php } ?>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</div>
</section>

<script>
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("foto").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };

    function myFunction() {
            var x = document.getElementById("tm_login_password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
</script>