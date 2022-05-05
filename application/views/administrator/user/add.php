<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card ">
            <div class="card-header bg-gradient-primary">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?= form_open('administrator/user/add') ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control" id="name" placeholder="Masukan nama lengkap">
                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>

                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" name="password1" class="form-control" id="password" placeholder="Masukan password">
                            <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" id="email" placeholder="Masukan email">
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Konfirmasi Password</label>
                            <input type="password" name="password2" class="form-control" id="password" placeholder="Konfirmasi password">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">No Hanphone</label>
                            <input type="number" name="phone" value="<?= set_value('phone') ?>" class="form-control" id="phone" placeholder="Masukan no handphone">
                        </div>
                        <?= form_error('phone', '<small class="text-danger">', '</small>'); ?>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Role</label>
                            <select name="role" class="form-control" id="role">
                                <option value="1">Administrator</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Status</label>
                            <select name="is_active" class="form-control" id="role">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="<?= base_url('administrator/user') ?>" title="Kembali" class="btn btn-sm bg-gradient-danger">Kembali <i class="fas fa"></i></a>
                <button type="submit" title="Simpan" class="btn btn-sm bg-gradient-success">Simpan <i class="fas fa-save"></i></button>
            </div>
            <?= form_close() ?>
        </div>

        <!-- /.card -->
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#name").keyup(function() {
            $(this).val($(this).val().toUpperCase());
        });
    });
</script>