
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
                <h3 class="card-title">Edit Dosen</h3>
              </div>
              <!-- /.card-header -->
               <!-- form start -->
               <?php foreach($tm_pegawai as $baris){ ?>
               <form class="user" action="<?php echo base_url('Admin/DataPegawai/Data_dosen/update');?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="tm_pegawai_id" value="<?php echo $baris->tm_pegawai_id; ?>" require>
                  <input type="hidden" name="tm_login_id" value="<?php echo $baris->tm_login_id; ?>" require>
                  <input type="hidden" name="filelama" value="<?php echo $baris->tm_pegawai_foto?>" require>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control form-control-user" id="tm_pegawai_nip" name="tm_pegawai_nip" placeholder="Masukkan NIP " value="<?php echo $baris->tm_pegawai_nip; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control form-control-user" id="tm_login_password" name="tm_login_password" placeholder="Masukkan Nama  " value="<?php echo $baris->tm_login_password; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control form-control-user" id="tm_pegawai_nama" name="tm_pegawai_nama" placeholder="Masukkan Nama  " value="<?php echo $baris->tm_pegawai_nama; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control form-control-user" id="tm_pegawai_email" name="tm_pegawai_email" placeholder="Masukkan Email " value="<?php echo $baris->tm_pegawai_email; ?>" require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. Telp</label>
                    <input type="text" class="form-control form-control-user" id="tm_pegawai_no_telp" name="tm_pegawai_no_telp" placeholder="Masukkan No. Telp " value="<?php echo $baris->tm_pegawai_no_telp; ?>" require >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control form-control-user" id="tm_pegawai_alamat" name="tm_pegawai_alamat" placeholder="Masukkan Alamat" value="<?php echo $baris->tm_pegawai_alamat; ?>" require >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto input</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto" name="foto" placeholder="Input Foto" aria-describedby="inputGroupPrepend" require>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="ComboBoxStaff">Staff</label>
                      <select class="form-control form-control-user" id="tm_staff_id" name="tm_staff_id" require>
                          <option value="">Pilih....</option>
	                          <option value="1">Admin</option>
                            <option value="2">Teknisi</option>
                            <option value="3">Dosen</option>
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <div class="text-center"><a class="small" href="<?php echo base_url('Admin/DataPegawai/Data_dosen/index')?>">Kembali</a></div>
                </div>
              </form> <?php } ?>
            </div>
            <!-- /.card -->
            </div>
            </div>
            </div>
            </div>
            </section>

