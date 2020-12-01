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
                        <div class="card-header">Detail Quiz <?= $id_detail_quiz ?></div>
                        <div class="card-body">
                            <?php
                            foreach($barang as $b) {
                                $query = $this->db->get_where('tm_topik', ['tm_topik_id' => $b['tm_topik_id']])->row_array();
                                $sql = $this->db->get_where('tm_pegawai', ['tm_pegawai_id' => $query['tm_pegawai_id']])->row_array();
                        ?>
                            <ul class="list-group">
                                <li class="list-group-item">Quiz ID : <?= $b['tm_quiz_id'] ?></li>
                                <li class="list-group-item">Topic ID : <?= $b['tm_topik_id'] ?></li>
                                <li class="list-group-item">Quiz Label : <?= $b['tm_quiz_label'] ?></li>
                                <li class="list-group-item">Quiz Unlock : <?= $b['tm_quiz_poin_unlock'] ?> poin</li>
                                <li class="list-group-item">Quiz Created : <?= $b['tm_quiz_date_create'] ?></li>
                                <li class="list-group-item">Topic Title : <span class="badge badge-primary badge-pill"><?= $query['tm_topik_nama'] ?></span></li>
                                <li class="list-group-item">Topic Created by : <?= $sql['tm_pegawai_nama'] ?></li>
                            </ul>
                            <?php } ?>
                            <h4 class="card-title my-3">Sub Topik Detail by ID Quiz</h4>
                            <?php
                            $mssql = $this->db->get_where('td_sub_topik', ['tm_topik_id' => $topik_id])->result_array();
                            $i = 0;
                            foreach ($mssql as $d):
                                $i++;
                                if(empty($d)) {
                                    echo "<p class='text-center font-weight-bold'>-- tidak ada sub topik pada topik ini -- </p>";
                                } else {
                            ?>
                            <?= $i; ?> <span class="badge badge-primary badge-pill"><?= $d['td_sub_topik_title']; ?></span></br>
                            <?php } endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
