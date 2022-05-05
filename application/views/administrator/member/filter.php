<div class="row">
    <div class="col-md-12">
        <?= $this->session->flashdata('message') ?>
        <div class="btn-group mb-2 mt-1" role="group" aria-label="">
            <button type="button" id="all" class="btn btn-sm  bg-gradient-primary"><i class="fas fa-user"></i> Semua Member</button>
            <button type="button" id="active" class="btn btn-sm  bg-gradient-secondary"><i class="fas fa-user-check"></i> Member Aktif</button>
            <button type="button" id="new" class="btn btn-sm  bg-gradient-secondary"><i class="fas fa-user-plus"></i> Member Baru</button>
        </div>
        <div class="card">
            <div class="card-header with-border">
            </div>

            <div class="card-body">
                <div class="table-responsive px-4 pb-3" style="border: 0">
                    <table class="table table-bordered" id="filter" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Hanphone</th>
                                <th>Tanggal Register</th>
                                <th class="text-center" width="5%">..</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($filter as $i) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $i->name ?></td>
                                    <td><?= $i->email  ?></td>
                                    <td><?= $i->phone  ?></td>
                                    <td><?= $i->create_at  ?></td>
                                    <td>
                                        <div class="btn-group dropleft text-center">
                                            <button type="button" class="btn bg-gradient-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Option
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('administrator/member/detail/') . "" . $i->id_user ?>">Detail</a>
                                                <a class="dropdown-item" href="<?= base_url('administrator/member/edit/') . "" . $i->id_user ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('administrator/member/send_email/') . "" . $i->id_user ?>">Send Email</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var table;

    $(document).ready(function() {
        $('#new').click(function() {
            window.location.href = base_url + "administrator/member/new";
            return false;
        });

        $('#active').click(function() {
            window.location.href = base_url + "administrator/member/active";
            return false;
        });

        table = $("#filter").DataTable({
            button: ['colvis']
        });
        table
            .buttons()
            .container()
            .appendTo("#filter_wrapper .col-md-6:eq(0)");
    });
</script>