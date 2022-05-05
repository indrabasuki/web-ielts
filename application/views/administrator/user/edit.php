<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card ">
            <div class="card-header bg-gradient-primary">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?= form_open('administrator/user/update') ?>
            <div class="card-body">
                <input type="hidden" value="<?= $user->id_user ?>" name="id_user">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" value="<?= $user->name ?>" class="form-control" id="name" placeholder="Masukan nama lengkap" required>
                        </div>
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
                            <label for="name">Email</label>
                            <input type="email" name="email" value="<?= $user->email ?>" class="form-control" id="email" placeholder="Masukan email" required>
                        </div>
                    </div>

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

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">No Hanphone</label>
                            <input type="number" name="phone" value="<?= $user->phone ?>" class="form-control" id="phone" placeholder="Masukan no handphone">
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="<?= base_url('administrator/user') ?>" title="Kembali" class="btn btn-sm bg-gradient-danger"><i class="fas fa-arrow-left"></i> Kembali <i class="fas fa"></i></a>
                <button type="submit" title="Update" class="btn btn-sm bg-gradient-success">Update <i class="fas fa-edit"></i></button>
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