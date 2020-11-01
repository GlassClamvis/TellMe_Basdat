<?php $this->load->view('adminlte/h_admin.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Level</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Level</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="card-title">DataTable Level</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a class="btn btn-sm btn-primary mb-4" href="<?php echo base_url('admin/level/tambah_level') ?>"><i class="fas fa-plus fa-sm"></i>Tambah Sub Topik</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col">Tingkat Kesulitan</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col" width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($level as $lvl) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $lvl->tm_level_nama ?></td>
                                <td><?php echo $lvl->tm_level_create_at ?></td>
                                <td class="text-right py-0 align-middle">
                                    <a><?php echo anchor('admin/level/edit/' . $lvl->tm_level_id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></a>
                                    <a><?php echo anchor('admin/level/hapus/' . $lvl->tm_level_id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tingkat Kesulitan</th>
                            <th scope="col">Date & Time</th>
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

<?php $this->load->view("adminlte/s_admin.php") ?>
<?php $this->load->view("adminlte/f_admin.php") ?>