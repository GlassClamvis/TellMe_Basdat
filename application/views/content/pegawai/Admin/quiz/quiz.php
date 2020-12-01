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
                        <div class="card-header">Quiz</div>
                        <div class="card-body">
                        <a class="btn btn-sm btn-success mb-4" href="<?= base_url() ?>admin/quiz/add"><i class="fa fa-plus"></i> Tambah </a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Quiz ID</th>
                                            <th>Topik ID</th>
                                            <th>Kode Quiz</th>
                                            <th>Label Quiz</th>
                                            <th>Unlock Quiz Poin</th>
                                            <th>Quiz Date Create</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
if (empty($barang)) {
echo "<tr><td colspan='6'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
} else {
foreach ($barang as $b) {
?>
<tr>
<td><?=$b['tm_quiz_id']; ?></td>
<td><?=$b['tm_topik_id']; ?></td>
    <td><?=$b['tm_quiz_kode']; ?></td>
    <td><?=$b['tm_quiz_label']; ?></td>
    <td><?=$b['tm_quiz_poin_unlock']; ?></td>
    <td><?=$b['tm_quiz_date_create']; ?></td>
    <td style="text-align: center">
    <a class="btn btn-sm btn-info" href="<?= base_url() ?>admin/quiz/detail/<?= $b['tm_quiz_id'] ?>"><i class="fa fa-info-circle"></i></a>
<a class="btn btn-sm btn-info" href="<?= base_url() ?>admin/quiz/edit/<?= $b['tm_quiz_id'] ?>"><i class="fa fa-edit"></i></a>
<a class="btn btn-sm btn-warning" href="<?= base_url() ?>admin/quiz/delete/<?= $b['tm_quiz_id'] ?>"><i class="fa fa-trash"></i></a>
</td>
</tr>
<?php
}
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
