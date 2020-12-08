<title>Data Admin</title>
</head>

<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ADMIN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header bg-success">
          <h3 class="card-title">Data Mahasiswa</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a class="btn btn-sm btn-primary mb-4" href="http://localhost/TellMe_Basdat/Admin/DataMahasiswa/Data_mhs/tambah"><i class=" fas fa-plus fa-sm">&nbsp;</i>Tambah Mahasiswa</a>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col" width="5%">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">NIM</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Prodi</th>
                <th scope="col">Semester</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Foto</th>
                <th scope="col" width="10%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($tm_mahasiswa as $baris) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->tm_mahasiswa_nama; ?></td>
                  <td><?php echo $baris->tm_mahasiswa_email; ?></td>
                  <td><?php echo $baris->tm_mahasiswa_nim; ?></td>
                  <td><?php echo $baris->tm_login_username; ?></td>
                  <td><?php echo $baris->tm_login_password; ?></td>
                  <td><?php echo $baris->tm_mahasiswa_jurusan; ?></td>
                  <td><?php echo $baris->tm_mahasiswa_prodi; ?></td>
                  <td><?php echo $baris->tm_mahasiswa_semester; ?></td>
                  <td><?php echo $baris->tm_mahasiswa_telp; ?></td>
                  <td><img src="<?= base_url() ?>upload/<?= $baris->tm_mahasiswa_foto; ?>" width="80px" height="100px"></td>
                  <td class="text-center py-0 align-middle">
                    <a><?php echo anchor('Admin/DataMahasiswa/Data_mhs/edit/' . $baris->tm_mahasiswa_id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></a>
                    <a><?php echo anchor('Admin/DataMahasiswa/Data_mhs/hapus/' . $baris->tm_mahasiswa_id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">NIP</th>
                <th scope="col">Password</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>