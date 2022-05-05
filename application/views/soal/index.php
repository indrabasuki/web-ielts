<div class="card mb-2">
    <div class="card-header with-border">
        <h5 class="card-title"><?= $submenu ?></h5>

    </div>
    <div class="card-body">

        <div class="row mb-2">
            <div class="col-sm-4 ">
                <!-- <a href="<?= base_url('soal/create') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Buat Soal</a> -->
                <button type="button" onclick="reload_ajax()" class="btn btn-secondary btn-sm "><i class="fa fa-refresh"></i> Reload</button>
            </div>
        </div>

        <div class="table-responsive">
            <table id="soaltoefl" class="w-100 table table-striped table-bordered table-hover ">
                <thead>
                    <tr>
                        <th width=25px>No</th>
                        <th>Soal</th>
                        <th width=20px class="text-center">Jawaban</th>
                        <th width="30">-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script type="text/javascript">
    var table;
    $(document).ready(function() {
        ajaxcsrf();
        table = $("#soaltoefl").DataTable({
            initComplete: function() {
                var api = this.api();
                $("#soaltoefl_filter input")
                    .off(".DT")
                    .on("keyup.DT", function(e) {
                        api.search(this.value).draw();
                    });
            },
            dom: "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [],
            oLanguage: {
                sProcessing: "loading..."
            },
            processing: true,
            serverSide: true,
            ajax: {
                url: base_url + "soal/data",
                type: "POST"
                //data: csrf
            },
            columns: [{
                    data: "id_soal",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "soal"
                },
                {
                    data: "jawaban"
                },


            ],

            columnDefs: [{
                targets: 3,
                data: "id_soal",
                render: function(data, type, row, meta) {
                    return `<div class="text-center">
                                <a href="${base_url}soal/detail/${data}" class="badge badge-secondary">
                                    <i class="fa fa-eye"></i> Detail
                                </a>
                            </div>`;
                }
            }],

            order: [
                [1, "asc"]
            ],
            rowId: function(a) {
                return a;
            },
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $("td:eq(0)", row).html(index);
            }
        });

        table
            .buttons()
            .container()
            .appendTo("#soaltoefl_wrapper .col-md-6:eq(0)");


        $('#section').change(function() {
            let id_part = $('#part').val();
            let src = '<?= base_url() ?>soal/data';
            let url;

            if (id_part !== 'all') {
                let src2 = src + '/' + id_part;
                url = $(this).prop('checked') === true ? src : src2;
            } else {
                url = src;
            }
            table.ajax.url(url).load();
        });

    });
</script>