<div class="card mb-2">
    <div class="card-header bg-gradient-primary">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="soaltoefl" class="w-100 table table-striped table-bordered table-hover ">
                <thead>
                    <tr>
                        <th width=5%>No</th>
                        <th>Soal</th>
                        <th>Opsi A</th>
                        <th>Opsi B</th>
                        <th>Opsi C</th>
                        <th>Opsi D</th>
                        <th>Jawaban</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($soal as $i) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $i->soal ?></td>
                            <td><?= $i->opsi_a ?></td>
                            <td><?= $i->opsi_b ?></td>
                            <td><?= $i->opsi_c ?></td>
                            <td><?= $i->opsi_d ?></td>
                            <td><?= $i->jawaban ?></td>
                            <td><a title="Detail" href="<?= base_url('administrator/question/detail/') . $i->id_soal ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script type="text/javascript">
    var table;
    $(document).ready(function() {
        table = $("#soaltoefl").DataTable({
            info: false,
            dom: "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: ["colvis"],
        });
        table
            .buttons()
            .container()
            .appendTo("#soaltoefl_wrapper .col-md-6:eq(0)");

    });
</script>