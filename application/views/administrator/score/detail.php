<div class="card mb-2">
    <div class="card-header bg-gradient-primary">
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message') ?>
        <div class="row">
            <div class="col-sm-12 mb-1">
                <button onclick="reload_ajax()" type="button" class="btn bg-dark btn-sm">Refresh <i class="fas fa-sync-alt"></i></button>
                <button type="button" id="filter" data-toggle="modal" data-target="#filterModal" class="btn  btn-sm  bg-gradient-secondary"> <i class="fas fa-calendar"></i> Fiter Tanggal</button>

               
            </div>
            <div class="col-sm-6">
                <table class="table w-100">
                    <tr>
                        <th>Nama Test</th>
                        <td><?= $ujian->nama_ujian ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Soal</th>
                        <td><?= $ujian->jumlah_soal ?></td>
                    </tr>
                    <tr>
                        <th>Waktu</th>
                        <td><?= $ujian->waktu ?> Menit</td>
                    </tr>

                </table>
            </div>
            <div class="col-sm-6">
                <table class="table w-100">
                    <tr>
                        <th>Tanggal Mulai</th>
                        <td><?= strftime('%A, %d %B %Y', strtotime($ujian->tgl_mulai)) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Selesai</th>
                        <td><?= strftime('%A, %d %B %Y', strtotime($ujian->terlambat)) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="table-responsive px-4 pb-3" style="border: 0">
        <table id="detail_hasil" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Section 1</th>
                    <th>Section 2</th>
                    <th>Section 3</th>
                    <th>Score</th>
                    <th>..</th>
                </tr>
            </thead>

        </table>
    </div>
</div>
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Filter berdasarkan tanggal</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('administrator/score/filter') ?>

                <div class="form-group">
                    <label for="start">Tanggal Mulai</label>
                    <input id="start" name="start" type="date" class="datetimepicker form-control" placeholder="Tanggal Awal" required>
                </div>
                <div class="form-group">
                    <label for="end">Tanggal Selesai</label>
                    <input id="end" name="end" type="date" class="datetimepicker form-control" placeholder="Tanggal Akhir" required>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Batal <i class="fas fa-window-close"></i></button>
                <button class="btn btn-success btn-sm" type="submit" title="Filter">Export <i class="fas fa-file-excel"></i></button>
            </div>
            <?= form_close() ?>

        </div>
    </div>
</div>
<script type="text/javascript">
    var table;

    $(document).ready(function() {
        table = $("#detail_hasil").DataTable({
            initComplete: function() {
                var api = this.api();
                $('#detail_hasil_filter input')
                    .off('.DT')
                    .on('keyup.DT', function(e) {
                        api.search(this.value).draw();
                    });
            },
            oLanguage: {
                sProcessing: "loading..."
            },
            processing: true,
            serverSide: true,
            ajax: {
                "url": base_url + "administrator/score/nilai/" + 7466,
                "type": "POST",
            },
            columns: [{
                    "data": "id"
                    
                },
                {
                    "data": 'name'
                },
                {
                    "data": 'email'
                },
                {
                    "data": 'jml_benar'
                },
                {
                    "data": 'jml_benar2'
                },
                {
                    "data": 'jml_benar3'
                },
                {
                    "data": 'score'
                }
            ],
            columnDefs: [{
                targets: 7,
                data: "id",
                render: function(data, type, row, meta) {
                    return `<div class="btn-group dropleft text-center">
                            <button type="button" class="btn bg-gradient-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Option
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url('administrator/member/print/') ?>${data}">Cetak</a>

                            </div>
                            </div>
                            `;
                }
            }],

            order: [
                [0, 'desc']
            ],
            rowId: function(a) {
                return a;
            },
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });
    });
</script>