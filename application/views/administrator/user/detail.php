<div class="row">
    <div class="col-md-12"><?= $this->session->flashdata('message') ?>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url('public/img/user.png') ?>" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $user->name ?></h3>

                <p class="text-muted text-center">Administrtaor</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <?php if ($user->is_active == 1) : ?>
                            <b>Status</b> <a class="float-right badge bg-gradient-success text-white">Aktif</a>
                        <?php else : ?>
                            <b>Status</b> <a class=" float-right badge bg-gradient-danger text-white">Tidak Aktif</a>
                        <?php endif; ?>
                    </li>

                </ul>
                <?php if ($user->is_active == 1) : ?>
                    <a class="btn bg-gradient-primary btn-block">Aktif <i class="fas fa-check"></i></a>
                    <a href="#" class="btn bg-gradient-danger btn-block" data-toggle="modal" data-target="#nonActiveModal">Non Aktif <i class="fas fa-power-off"></i></a>
                <?php else : ?>
                    <a href="<?= base_url('administrator/user/activate/') . "" . $user->id_user ?>" class="btn bg-gradient-success btn-block"><b>AKTIVASI</b> <i class="fas fa-key"></i></a>

                <?php endif; ?>
                <a href="<?= base_url('administrator/user/chage_password/') . "" . $user->id_user ?>" class="btn bg-gradient-success btn-block"><b>Ganti Password</b> <i class="fas fa-lock"></i></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#information" data-toggle="tab">Informasi</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="information">
                        <table class="table">
                            <tr>
                                <td><strong>Nama</strong></td>
                                <td>: <?= $user->name ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>: <?= $user->email ?></td>
                            </tr>
                            <tr>
                                <td><strong>No Hanphone</strong></td>
                                <td>: <?= $user->phone ?></td>
                            </tr>

                            <tr>
                                <td><strong>Role</strong></td>
                                <?php if ($user->role == 1) : ?>
                                    <td>: <a class="badge badge-primary">ADMINISTRATOR</a></td>
                                <?php else : ?>
                                    <td>: <a class="badge badge-primary">MEMBER</a></td>
                                <?php endif; ?>
                            </tr>
                        </table>
                        <hr>
                        <a href="<?= base_url('administrator/user/edit/') . "" . $user->id_user ?>" title="Edit" class="btn btn-sm bg-gradient-warning float-right">Edit <i class="fas fa-edit"></i></a>
                    </div>

                </div><!-- /.card-body -->
            </div>
        </div>
    </div>