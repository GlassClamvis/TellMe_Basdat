
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
                            <h3 class="card-title"><i class=" fas fa-plus fa-sm"></i>Update Sub Topik</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">

                                <div class="container">
                                    <?php foreach ($data_sub_hoki->result() as $sub_tpk) { ?>
                                        <form class="form-horizontal" action="<?php echo base_url() . 'Admin/topik/update_sub_topik' ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>Judul Sub Topik</label>
                                                    <input type="hidden" name="td_sub_topik_id" value="<?php echo $sub_tpk->td_sub_topik_id ?>" class="form-control" placeholder="Nama Topik" required>
                                                    <input type="text" name="td_sub_topik_title" value="<?php echo $sub_tpk->td_sub_topik_title ?>" class="form-control" placeholder="Nama Topik" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label>Sub Topik Content</label>
                                                    <textarea type="text" id="compose-textarea" style="height: 300px" name="td_sub_topik_content" value="<?php echo $sub_tpk->td_sub_topik_content ?>" class="form-control" placeholder="Sub Topik Content" required></textarea>
                                                </div>
                                            </div>
                                            <a class="btn btn-danger btn-flat" href="<?php echo base_url('admin/topik/') ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
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
