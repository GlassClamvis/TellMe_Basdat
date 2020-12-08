
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
                            <h3 class="card-title"><i class=" fas fa-plus fa-sm"></i>Detail Sub Topik</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">

                                <div class="container">
                                    <table class="table">
                                        <tr>
                                            <th>Judul Sub Topik</th>
                                            <td>
                                                <?php echo $detail_sub_topik->td_sub_topik_title ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Content</th>
                                            <td>
                                                <?php echo $detail_sub_topik->td_sub_topik_content ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Date Time</th>
                                            <td>
                                                <?php echo $detail_sub_topik->td_sub_topik_create_at ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ID Pegawai</th>
                                            <td>
                                                <?php echo $detail_sub_topik->tm_pegawai_id ?>. <?php echo $this->session->userdata('nama_peg'); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ID Topik</th>
                                            <td>
                                                <?php echo $detail_sub_topik->tm_topik_id ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a class="btn btn-danger btn-flat   " href="<?php echo base_url('admin/topik/') ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>

