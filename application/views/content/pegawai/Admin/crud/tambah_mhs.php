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
                            <h3 class="card-title">Tambah Mahasiswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="user" action="<?php echo base_url('Admin/DataMahasiswa/Data_mhs/input'); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIM</label>
                                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_nim" name="tm_mahasiswa_nim" placeholder="Masukkan NIM " require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_nama" name="tm_mahasiswa_nama" placeholder="Masukkan Nama  " require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jurusan</label>
                                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_jurusan" name="tm_mahasiswa_jurusan" placeholder="Masukkan Jurusan " require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Prodi</label>
                                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_prodi" name="tm_mahasiswa_prodi" placeholder="Masukkan Prodi  " require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Semester</label>
                                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_semester" name="tm_mahasiswa_semester" placeholder="Masukkan Semester " require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-user" id="tm_mahasiswa_tanggal_lahir" name="tm_mahasiswa_tanggal_lahir" require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_email" name="tm_mahasiswa_email" placeholder="Masukkan Email " require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Telp</label>
                                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_telp" name="tm_mahasiswa_telp" placeholder="Masukkan No. Telp " require>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control form-control-user" id="tm_mahasiswa_alamat" name="tm_mahasiswa_alamat" placeholder="Masukkan Alamat" require>
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
                                <div class="text-center"><a class="small" href="<?php echo base_url('Admin/DataPegawai/Data_admin/index') ?>">Kembali</a></div>
                            </div>
                        </form>
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
</script>