<?php $this->load->view('adminlte/h_admin.php') ?>
<title>Data Admin</title>
</head>
<body>
      <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
                <a href="<?php echo base_url('Admin/DataPegawai/Data_admin/tambah')?>"><button class="btn btn-primary btn-sm btninsert" >Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Staff</th>
                    <th scope="col"><center><span>Action</span></center></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1;
                          foreach($tm_pegawai as $baris){
                            ?>
              <tr
              ><td><?php echo $no++;?></td>
             <td><?php echo $baris->tm_pegawai_nip;?></td>
             <td><?php echo $baris->tm_pegawai_nama;?></td>
            <td><?php echo $baris->tm_pegawai_email;?></td>
            <td><?php echo $baris->tm_pegawai_no_telp;?></td>
            <td><?php echo $baris->tm_pegawai_alamat;?></td>
            <td><?php echo $baris->tm_pegawai_foto;?></td>
            <td><?php echo $baris->tm_staff_label;?></td>
            <td>
            <?php
                   
                 echo '<a href="'.base_url('Admin/DataPegawai/Data_admin/edit/'.$baris->tm_pegawai_id).'" class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>';
                 echo "  ";
                echo '<a href="'.base_url('Admin/DataPegawai/Data_admin/hapus/'.$baris->tm_pegawai_id).'" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>';
                    
            ?>
            
            </td>
        </tr>
            <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Staff</th>
                    <th scope="col"><center><span>Action</span></center></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php $this->load->view("adminlte/s_admin.php") ?>
<?php $this->load->view("adminlte/f_admin.php") ?>
