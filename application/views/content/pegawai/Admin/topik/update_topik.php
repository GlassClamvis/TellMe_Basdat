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
                            <h3 class="card-title"><i class=" fas fa-plus fa-sm"></i>Update Topik</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">

                                <div class="container">
                                    <?php foreach ($data_hoki->result() as $tpk) { ?>
                                        <form class="form-horizontal" action="<?php echo base_url() . 'Admin/topik/update_topik' ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>Nama Topik</label>
                                                    <input type="hidden" name="tm_topik_id" value="<?php echo $tpk->tm_topik_id ?>" class="form-control" placeholder="Nama Topik" required>
                                                    <input type="text" name="tm_topik_nama" value="<?php echo $tpk->tm_topik_nama ?>" class="form-control" placeholder="Nama Topik" required>
                                                </div>
                                            </div>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/topik/') ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i>Cancel</a>
                                            <button type="submit" class="btn btn-success btn-sm"><i class=" fas fa-plus fa-sm"></i>Save</button>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>

<?php $this->load->view("adminlte/s_admin.php") ?>
<?php $this->load->view("adminlte/f_admin.php") ?>