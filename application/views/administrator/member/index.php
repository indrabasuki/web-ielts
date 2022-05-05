<div class="row">
    <div class="col-md-12">
        <?= $this->session->flashdata('message') ?>

        <div class="card">
            <div class="card-header with-border">
                <button onclick="reload_ajax()" type="button" class="btn bg-dark btn-sm">Refresh <i class="fas fa-sync-alt"></i></button>
                <a href="<?= base_url('administrator/member/add') ?>" class="btn bg-gradient-primary btn-sm">Add New <i class="fas fa-plus"></i></a>
                <a href="<?= base_url('administrator/member/import') ?>" class="btn bg-gradient-success btn-sm">Import Data <i class="fas fa-file-excel"></i></a>

            </div>

            <div class="card-body">
                <div class="table-responsive px-4 pb-3" style="border: 0">
                    <table class="table table-bordered" width="100%" id="member">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th class="text-center" width="5%">..</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($member as $i) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $i->name ?></td>
                                    <td><?= $i->email ?></td>
                                    <td><?= $i->phone ?></td>
                                    <td>
                                        <div class="btn-group dropleft text-center">
                                            <button type="button" class="btn bg-gradient-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Option
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('administrator/member/detail/') . $i->id_user ?>">Detail</a>
                                                <a class="dropdown-item" href="<?= base_url('administrator/member/edit/') . $i->id_user ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('administrator/member/delete/') . $i->id_user ?>">Hapus</a>
                                                <a class="dropdown-item" href="<?= base_url('administrator/member/send_email/') . $i->id_user ?>">Send Email</a>
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
        table = $("#member").DataTable({
            info: false,
            buttons: [{
                    extend: "excel",
                    exportOptions: {
                        columns: [1, 2, 3]
                    }
                },
                {
                    extend: "pdf",
                    exportOptions: {
                        columns: [1, 2, 3]
                    }
                },
                "colvis"
            ],
        });

        table
            .buttons()
            .container()
            .appendTo("#member_wrapper .col-md-6:eq(0)");
    });
</script>