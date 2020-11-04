<?php $this->load->view('adminlte/h_admin.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Sub Topik</h1>
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
                            <h3 class="card-title"><i class=" fas fa-plus fa-sm"></i>Tambah Sub Topik</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">

                                <div class="container">
                                    <form class="form-horizontal" action="<?php echo base_url() . 'Admin/topik/generate_sub_topik'; ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>Title Sub Topik</label>
                                                <input type="text" name="td_sub_topik_title" class="form-control" placeholder="Title Sub Topik" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>ID Topik</label>
                                                <select name="tm_topik_id" class="form-control select2bs4" style="width: 100%;">
                                                    <?php foreach ($topik as $tpk) : ?>
                                                        <option value="<?php echo $tpk->tm_topik_id ?>"><?php echo $tpk->tm_topik_nama ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label>Sub Topik Content</label>
                                                <textarea type="text" name="td_sub_topik_content" class="form-control" placeholder="Sub Topik Content" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>ID Pegawai</label>
                                                <select name="tm_pegawai_id" class="form-control select2bs4" style="width: 100%;">
                                                    <?php foreach ($staff as $pgw) : ?>
                                                        <option value="<?php echo $pgw->tm_pegawai_id ?>"><?php echo $pgw->tm_pegawai_nama ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                        </div>
                                        <a class="btn btn-danger btn-md" href="<?php echo base_url('admin/topik/') ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i>Cancel</a>
                                        <button type="submit" class="btn btn-success btn-md"><i class=" fas fa-plus fa-sm"></i>Save</button>
                                    </form>
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