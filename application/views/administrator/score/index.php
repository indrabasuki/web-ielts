<div class="card">
    <div class="card-body">
        <div class="table-responsive" style="border: 0">
            <table class="w-100 table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Test</th>
                        <th>Total Soal</th>
                        <th>Waktu</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($score as $i) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $i->nama_ujian ?></td>
                            <td><?= $i->jumlah_soal ?></td>
                            <td><?= $i->waktu ?></td>
                            <td><?= $i->tgl_mulai ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?= $this->session->flashdata('message') ?>
        <div class="card">
            <div class="card-header bg-gradient-secondary">
            <button type="button" data-toggle="modal" data-target="#filterModal" class="btn btn-sm  bg-gradient-success"><i class="fas fa-file-excel"></i> Export</button>            </div>
            <div class="card-body">
                <div class="table-responsive " style="border: 0">
                    <table id="score" class="w-100 table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Section 1</th>
                                <th>Section 2</th>
                                <th>Section 3</th>
                                <th>Score</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($nilai as $item) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->name ?></td>
                                    <td><?= $item->email ?></td>
                                    <td class="text-center"><strong><?= $item->jml_benar ?></strong></td>
                                    <td class="text-center"><strong><?= $item->jml_benar2 ?></strong></td>
                                    <td class="text-center"><strong><?= $item->jml_benar3 ?></strong></td>
                                    <td class="text-center"><strong><?= $item->score ?></strong></td>
                                    <td><a href="<?= base_url('administrator/member/print/') . $item->id ?>" class="btn btn-sm btn-success"><i class="fas fa-print"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filter Tanggal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= form_open('administrator/score/export') ?>
                <div class="form-group">
                    <label for="">Tanggal awal</label>
                    <input type="date" name="start" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal akhir</label>
                    <input type="date" name="end" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Export</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    var table;

    $(document).ready(function() {
        table = $("#score").DataTable({
            info: false,
            dom: "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [{
                    extend: "excel",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    }
                },
                {
                    extend: "pdf",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4]
                    }
                }, "colvis"
            ],


        });
    });
</script>