<div class="row">
    <div class="card">
        <div class="card-header bg-gradient-primary"></div>
        <div class="card-body">
            <h1 class="bg-gradient-info">
                <strong>Catatan!</strong> untuk import data dari file excel, silahkan download templatenya terlebih dahulu.

            </h1>
            <ul>
                <li>name : diisi nama member</li>
                <li>emai : diisi email member</li>
                <li>nomer handphone : diisi no hp member</li>
                <li>active : 1= aktif dan 0=tidak aktif</li>
            </ul>
            <a href="<?= base_url('public/uploads/import/format/member.xlsx') ?>" class="btn bg-gradient-secondary btn-sm">Download Format <i class="fas fa-download"></i></a>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
</div>

<div class="row">
    <?= form_open_multipart('administrator/member/preview'); ?>
    <label for="file" class="col-md-12 text-right">Pilih File</label>
    <div class="col-sm-4">
        <div class="form-group">
            <input type="file" name="upload_file">
        </div>
    </div>
    <div class="col-sm-6">
        <button name="preview" type="submit" class="btn btn-sm bg-gradient-success">Preview <i class="fas fa-eye"></i></button>
    </div>
    <?= form_close(); ?>
    <div class="col-sm-6 col-sm-offset-3">
        <?php if (isset($_POST['preview'])) : ?>
            <br>
            <h4>Preview Data</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>No Handphone</td>
                        <td>Active</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (empty($import)) {
                        echo '<tr><td colspan="2" class="text-center">Data kosong! pastikan anda menggunakan format yang telah disediakan.</td></tr>';
                    } else {
                        $no = 1;
                        foreach ($import as $data) :
                    ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td class="<?= $data['name'] == null ? 'bg-danger' : ''; ?>">
                                    <?= $data['name'] == null ? 'BELUM DIISI' : $data['name']; ?>
                                </td>
                                <td class="<?= $data['email'] == null ? 'bg-danger' : ''; ?>">
                                    <?= $data['email'] == null ? 'BELUM DIISI' : $data['email']; ?>
                                </td>
                                <td class="<?= $data['phone'] == null ? 'bg-danger' : ''; ?>">
                                    <?= $data['phone'] == null ? 'BELUM DIISI' : $data['phone']; ?>
                                </td>
                                <td class="<?= $data['is_active'] == null ? 'bg-danger' : ''; ?>">
                                    <?= $data['is_active'] == null ? 'BELUM DIISI' : $data['is_active']; ?>
                                </td>

                            </tr>
                    <?php
                        endforeach;
                    }
                    ?>
                </tbody>
            </table>
            <?php if (!empty($import)) : ?>

                <?= form_open('administrator/member/do_import', null, ['data' => json_encode($import)]); ?>
                <button type='submit' class='btn btn-block  bg-gradient-primary'>Import</button>
                <?= form_close(); ?>

            <?php endif; ?>
            <br>
        <?php endif; ?>
    </div>
</div>