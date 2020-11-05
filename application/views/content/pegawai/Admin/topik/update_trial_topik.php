<?php $this->load->view('adminlte/h_admin.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Trial Topik</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Topik</li>
                        <li class="breadcrumb-item active">Trial Topik</li>
                        <li class="breadcrumb-item active">Update Trial Topik</li>
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
                            <h3 class="card-title"><i class=" fas fa-plus fa-sm"></i>Tambah Trial Topik</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">

                                <div class="container">
                                    <?php foreach ($trial_topik as $ttpk) { ?>
                                        <form class="form-horizontal" action="<?php echo base_url() . 'Admin/topik/update_trial_topik'; ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>Soal Topik</label>
                                                    <input type="hidden" name="tm_trial_topik_id" value="<?php echo $ttpk->tm_trial_topik_id; ?>" class="form-control" placeholder="Title Sub Topik" required>
                                                    <input type="text" name="tm_trial_topik_soal" value="<?php echo $ttpk->tm_trial_topik_soal; ?>" class="form-control" placeholder="Title Sub Topik" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label>Deskripsi</label>
                                                    <textarea type="text" name="tm_trial_topik_deskripsi" id="compose-textarea" style="height: 300px" value="<?php echo $ttpk->tm_trial_topik_deskripsi; ?>" class="form-control" placeholder="Sub Topik Content" required></textarea>
                                                </div>
                                            </div>
                                            <a class="btn btn-danger btn-flat" href="<?php echo base_url('admin/topik/trial_topik') ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                                            <button type="submit" class="btn btn-success btn-flat"><i class=" fas fa-plus fa-sm"></i>Save</button>
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