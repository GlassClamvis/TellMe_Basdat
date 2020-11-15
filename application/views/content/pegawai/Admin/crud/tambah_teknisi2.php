
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data</h1>
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
                <h3 class="card-title">Tambah Teknisi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="user" action="<?php echo base_url('Admin/DataPegawai/Data_teknisi/input2');?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control form-control-user" id="tm_login_password" name="tm_login_password" placeholder="Masukkan password"  require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control form-control-user" id="tm_login_username" name="tm_login_username" placeholder="Masukkan username"  require>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Acces</label>
                    <input type="text" class="form-control form-control-user" id="tm_user_access_id" name="tm_user_access_id" placeholder="Masukkan User Acces Id"  require>
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pegawai ID</label>

                    <input type="text" class="form-control form-control-user" id="tm_pegawai_id" name="tm_pegawai_id" placeholder="Masukkan ID.." value="<?php echo $tm_pegawai; ?>" require >

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <div class="text-center"><a class="small" href="<?php echo base_url('Admin/DataPegawai/Data_teknisi/index')?>">Kembali</a></div>
                </div>
              </form> 
            </div>
            <!-- /.card -->
            </div>
            </div>
            </div>
            </div>
            </section>

