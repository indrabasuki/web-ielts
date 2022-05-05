<div class="card mb-2">
    <div class="card-header bg-gradient-primary">
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
                <?= form_open('administrator/tes/save') ?>

                <div class="form-group">
                    <label for="tgl_mulai">Tanggal Mulai</label>
                    <input id="tgl_mulai" name="tgl_mulai" type="date" class="datetimepicker form-control" placeholder="Tanggal Mulai">
                    <?= form_error('tgl_mulai', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="tgl_selesai">Tanggal Selesai</label>
                    <input id="tgl_selesai" name="tgl_selesai" type="date" class="datetimepicker form-control" placeholder="Tanggal Selesai">
                    <?= form_error('tgl_selesai', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input value="<?= $ujian->waktu ?>" placeholder="menit" type="number" class="form-control" name="waktu" readonly>
                </div>


                <div class="form-group pull-right">
                    <a href="<?= base_url('administrator/tes') ?>" class="btn btn-sm bg-gradient-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button id="submit" type="submit" class="btn btn-sm bg-gradient-success">Simpan <i class="fas fa-save"></i></button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>