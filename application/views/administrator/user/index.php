<div class="row">
    <div class="col-md-12">
        <?= $this->session->flashdata('message') ?>
        <div class="card mt-1">
            <div class="card-header with-border">
                <a href="<?= base_url('administrator/user/add') ?>" class="btn bg-gradient-primary btn-sm">Tambah Data <i class="fas fa-plus"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive px-4 pb-3" style="border: 0">
                    <table class="table table-bordered" width="100%" id="admin">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Hanphone</th>
                                <th width="5%">Status</th>
                                <th class="text-center" width="5%">..</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($user as $i) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $i->name ?></td>
                                    <td><?= $i->email ?></td>
                                    <td><?= $i->phone ?></td>
                                    <?php if ($i->is_active == 1) : ?>
                                        <td><a class="badge badge-success">Aktif</a></td>
                                    <?php else : ?>
                                        <td><a class="badge badge-danger">Tidak Aktif</a></td>
                                    <?php endif ?>
                                    <td>
                                        <div class="btn-group dropleft text-center">
                                            <button type="button" class="btn bg-gradient-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Option
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('administrator/user/detail/') . $i->id_user ?>">Detail</a>
                                                <a class="dropdown-item" href="<?= base_url('administrator/user/edit/') . $i->id_user ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('administrator/user/delete/') . $i->id_user ?>">Hapus</a>
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
        table = $("#admin").DataTable({
            info: false,
            dom: "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
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
            ]
        });

        table
            .buttons()
            .container()
            .appendTo("#member_wrapper .col-md-6:eq(0)");
    });
</script>