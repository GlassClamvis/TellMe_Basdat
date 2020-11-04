<?php $this->load->view('adminlte/h_admin.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Topik & Sub Topik</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Topik & Sub Topik</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="card-title">DataTable Topik</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a class="btn btn-sm btn-primary mb-4" href="<?php echo base_url('admin/topik/tambah_topik') ?>"><i class=" fas fa-plus fa-sm"></i>Tambah Topik</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col">Nama Topik</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col" width="13%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($topik as $tpk) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tpk->tm_topik_nama ?></td>
                                <td><?php echo $tpk->tm_topik_create_at ?></td>
                                <td class="text-right py-0 align-middle">
                                    <a><?php echo anchor('admin/topik/detail_topik/' . $tpk->tm_topik_id, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></a>
                                    <a><?php echo anchor('admin/topik/edt_topik/' . $tpk->tm_topik_id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></a>
                                    <a><?php echo anchor('admin/topik/delete_data_topik/' . $tpk->tm_topik_id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Topik</th>
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
<!-- /.content-wrapper -->

<?php $this->load->view("adminlte/s_admin.php") ?>
<?php $this->load->view("adminlte/f_admin.php") ?>