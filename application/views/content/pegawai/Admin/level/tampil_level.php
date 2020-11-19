
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
            <div class="card-header bg-lightblue">
                <h3 class="card-title">DataTable Level</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a class="btn btn-flat btn-success mb-4" href="<?php echo base_url('admin/level/tambah_level') ?>"><i class="fas fa-plus-square fa-sm"></i> Level </a>
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
                                    <a data-toggle="modal" data-target="#hapus">
                                        <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>
                                    </a>
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
<!-- Modal Tambah -->
<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda ingin Menghapus Data Ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
                <a><?php echo anchor('admin/level/hapus/' . $lvl->tm_level_id, '<div class="btn btn-success"><i class="fas fa-check"></i></div>') ?></a>
            </div>
        </div>
    </div>
</div>
