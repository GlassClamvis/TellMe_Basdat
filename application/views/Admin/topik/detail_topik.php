<?php $this->load->view('adminlte/h_admin.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Topik</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Topik</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header bg-lightblue ">
                            <h3 class="card-title"><i class=" fas fa-plus fa-sm"></i><strong> Detail Topik <?php echo $detail_topik->tm_topik_nama ?></strong></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a class="btn btn-danger btn-sm mb-4" href="<?php echo base_url('admin/topik/') ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a>
                            <a class="btn btn-sm btn-primary mb-4" href="<?php echo base_url('admin/topik/tambah_sub_topik') ?>"><i class="fas fa-plus fa-sm"></i>Tambah Sub Topik</a>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col" width="15%">Sub Topik Title</th>
                                        <th scope="col" width="40%">Sub Topik Content</th>
                                        <th scope="col">Date & Time</th>
                                        <th scope="col" width="13%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($sub_topik as $sub_tpk) {
                                    ?>

                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $sub_tpk->td_sub_topik_title ?></td>
                                            <td><?php echo $sub_tpk->td_sub_topik_content ?></td>
                                            <td><?php echo $sub_tpk->td_sub_topik_create_at ?></td>
                                            <td class="text-right py-0 align-middle">
                                                <a><?php echo anchor('admin/topik/detail_sub_topik/' . $sub_tpk->td_sub_topik_id, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></a>
                                                <a><?php echo anchor('admin/topik/edt_sub_topik/' . $sub_tpk->td_sub_topik_id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></a>
                                                <a><?php echo anchor('admin/topik/delete_data_sub_topik/' . $sub_tpk->td_sub_topik_id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Sub Topik Title</th>
                                        <th scope="col">Sub Topik Content</th>
                                        <th scope="col">Date & Time</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
    </section>
    <!-- /.content -->

    <?php $this->load->view("adminlte/s_admin.php") ?>
    <?php $this->load->view("adminlte/f_admin.php") ?>