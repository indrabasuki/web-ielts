<div class="card mb-2">
    <?= $this->session->flashdata('message') ?>
    <div class="card-header bg-primary">
    </div>
    <div class="card-body">
        <div class="table-responsive px-4 pb-3" style="border: 0">
            <table id="ujian" class="w-100 table table-striped table-bordered table-hover">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Nama Test</th>
                        <th>Jumlah Soal</th>
                        <th>Waktu</th>
                        <th>Cetak Sertifikat</th>
                        <th>Token</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($ujian as $item) : ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><strong><?= $item['nama_ujian'] ?></strong>
                            <hr>
                            Tanggal Mulai : <?= $item['tgl_mulai'] ?><br>
                            Tanggal Selesai : <?= $item['terlambat'] ?>
                            </td>
                            <td><strong><?= $item['jumlah_soal'] ?></strong> Soal</td>
                            <td><?= $item['waktu'] ?> Menit</td>
                            <?php if ($item['tombol_cetak'] == 1) : ?>
                                <td class="text-center"><button data-toggle="modal" data-target="#modal" class="btn  btn-sm btn-success">Aktif <i class="fas fa-check"></i></td>
                            <?php else : ?>
                                <td class="text-center"><button data-toggle="modal" data-target="#modal" class="btn btn-sm btn-danger">Tidak Aktif <i class="fas fa-power-off"></i></td>
                            <?php endif; ?>
                            <td><button class="btn  btn-sm btn-success"><?= $item['token'] ?> <i class="fas fa-key"></i></button></td>
                            <td width=50px><a href="<?= base_url() . 'administrator/tes/refresh_token/' . '' . $item['id_ujian'] ?>" class="badge badge-secondary center <?= $item['id_ujian'] ?>" id="btn-token">Update Token</a>
                                <a href="<?= base_url() . 'administrator/tes/perpanjang/' . '' . $item['id_ujian'] ?>" class="badge badge-warning">Perpanjang</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('administrator/tes/tombol') ?>
                    <div class="form-group">
                        <label>Status Tombol Cetak</label>
                        <select name="tombol_cetak" class="form-control">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary btn-sm" data-dismiss="modal">Batal <i class="fas fa-window-close"></i></button>
                    <button type="submit" class="btn bg-gradient-success btn-sm">Simpan <i class="fas fa-save"></i></button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>