<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Quiz Management</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Edit Quiz <?= $id ?></div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form"
                                action="<?= base_url('admin/quiz/edit/'.$id); ?>" method="post">
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label for="nama_barang" class="col-sm-2 control-label">Kode Quiz</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="quiz_kode"
                                            name="quiz_kode" placeholder="Kode Quiz"
                                            value="<?= $quiz_kode ?>">
                                        <?= form_error('quiz_kode','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label for="kategori" class="col-sm-2 control-label">Quiz Label</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="quiz_label" name="quiz_label"
                                            placeholder="Label Quiz"
                                            value="<?= $quiz_label ?>">
                                        <?= form_error('quiz_label','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label for="nama_barang" class="col-sm-2 control-label">Quiz Poin Unlock</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="quiz_unlock"
                                            name="quiz_unlock" placeholder="Quiz Poin to Unlock"
                                            value="<?= $quiz_unlock ?>">
                                        <?= form_error('quiz_unlock','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label for="nama_barang" class="col-sm-2 control-label">Quiz Topik</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="topik_id">
                                            <?php
                                                $query = $this->db->get('tm_topik')->result_array();
                                                foreach($query as $q):
                                            ?>
                                            <option value="<?= $q['tm_topik_id'] ?>"><?= $q['tm_topik_nama'] ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                        <?= form_error('topik_id','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                    </div>
                                </div>

                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-primary bd-0">Edit Quiz</button>
                                    <a href="javascript:window.history.back()"
                                        class="btn btn-secondary bd-0">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
