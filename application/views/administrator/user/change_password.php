<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-gradient-primary"></div>
            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('administrator/user/change_password'); ?>" method="post">
                    <div class="form-group">
                        <label for="current_password">Password lama</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password1">Password baru</label>
                        <input type="password" class="form-control" id="new_password1" name="new_password1">
                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password2">Konfirmasi password</label>
                        <input type="password" class="form-control" id="new_password2" name="new_password2">
                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

            </div>
            <div class="card-footer">
                <a href="<?= base_url('administrator/dashboard') ?>" title="Kembali" class="btn btn-sm bg-gradient-danger"><i class="fas fa-arrow-left"></i> Kembali <i class="fas fa"></i></a>
                <button type="submit" class="btn bg-gradient-primary btn-sm">Change Password <i class="fas fa-lock"></i></button>

            </div>
            </form>
        </div>
    </div>

</div>