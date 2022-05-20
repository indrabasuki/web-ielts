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

                <p class="text-muted text-center">Member</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <?php if ($user->is_active == 1) : ?>
                            <b>Status</b> <a class="float-right badge bg-gradient-success text-white">Active</a>
                        <?php else : ?>
                            <b>Status</b> <a class=" float-right badge bg-gradient-danger text-white">Not Active</a>
                        <?php endif; ?>
                    </li>

                </ul>
                <?php if ($user->is_active == 1) : ?>
                    <a class="btn bg-gradient-primary btn-block">Aktif <i class="fas fa-check"></i></a>
                    <a href="#" class="btn bg-gradient-danger btn-block" data-toggle="modal" data-target="#nonActiveModal">Non Aktif <i class="fas fa-power-off"></i></a>
                <?php else : ?>
                    <a href="<?= base_url('administrator/member/activate/') . "" . $user->id_user ?>" class="btn bg-gradient-success btn-block"><b>AKTIVASI</b> <i class="fas fa-key"></i></a>

                <?php endif; ?>
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
                    <li class="nav-item"><a class="nav-link" href="#tes_history" data-toggle="tab">Tes History</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="information">
                        <table class="table">
                            <tr>
                                <td><strong>Name :</strong></td>
                                <td>: <?= $user->name ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email :</strong></td>
                                <td>: <?= $user->email ?></td>
                            </tr>
                            <tr>
                                <td><strong>Phone number</strong></td>
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
                        <a href="<?= base_url('administrator/member/edit/') . $user->id_user ?>" title="Edit" class="btn btn-sm bg-gradient-warning float-right">Edit <i class="fas fa-edit"></i></a>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tes_history">
                        <!-- The timeline -->
                        <a href="<?= base_url('administrator/member/store_new_test/') . $user->id_user ?>" class="btn btn-sm bg-primary mb-1" title=">Create new test">Create new test <i class="fas fa-plus"></i></a>
                        <hr>
                        <div class="timeline timeline-inverse">
                            <?php if ($user_exam_history) : ?>
                                <?php foreach ($user_exam_history as $i) : ?>
                                    <div>
                                        <div class="timeline-item">
                                            <h3 class="timeline-header"><a href="#"><?= $i->name ?></a> (<?= $i->email ?>)</h3>
                                            <div class="timeline-body">
                                                <p>ID Test : <?= sha1($i->id) ?></p>
                                                <div class="table-responsive">
                                                </div>
                                                <h5>Overal Band : <?= $i->ielts_band ?></h5>
                                            </div>
                                            <div class="timeline-footer">
                                                <?php if ($i->status == 0) : ?>
                                                    <a href="#" class="btn btn-danger btn-sm">User has not completed the test <i class="fas fa-window-close"></i></a>
                                                    <a href="<?= base_url('administrator/member/delete_test/') . "" . $i->id ?>" class="float-right btn btn-danger btn-sm">Delete <i class="fas fa-trash"></i></a>

                                                <?php else : ?>
                                                    <a href="#" class="btn btn-primary btn-sm">Test Selesai <i class="fas fa-check"></i></a>
                                                    <a href="<?= base_url('administrator/member/print/') . "" . $i->id ?>" class="btn btn-primary btn-sm">Print Sertifikat <i class="fas fa-print"></i></a>
                                                    <a href="<?= base_url('administrator/member/reset_test/') . "" . $i->id ?>" class="btn btn-success btn-sm">Reset Test <i class="fas fa-sync-alt"></i></a>
                                                    <a href="<?= base_url('administrator/member/delete_test/') . "" . $i->id ?>" class="float-right btn btn-danger btn-sm">Delete <i class="fas fa-trash"></i></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <h4 class="text-center">No data found</h4>
                            <?php endif; ?>
                        </div>
                        <!-- /.tab-pane -->


                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>

    <div class="modal fade" id="nonActiveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Konfirmasi ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda ingin Non Aktifkan member ?</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal <i class="fas fa-window-close"></i></button>
                    <a class="btn btn-primary" href="<?= base_url('administrator/member/non_activate/') . "" . $member->id_user ?>">Non Aktif <i class="fas fa-check"></i></a>
                </div>
            </div>
        </div>
    </div>