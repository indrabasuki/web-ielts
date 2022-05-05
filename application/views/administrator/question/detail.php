<div class="card mb-2 ">
    <div class="card-header bg-gradient-primary">
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h4 class="text-center">Soal</h4>
                <?= $soal->soal ?>
                <hr class="my-4">
                <h4 class="text-center">Jawaban</h4>

                <?php
                $abjad = ['a', 'b', 'c', 'd'];
                $benar = "<i class='fa fa-check-circle text-primary'></i>";

                foreach ($abjad as $abj) :

                    $ABJ = strtoupper($abj);
                    $opsi = 'opsi_' . $abj;
                    $file = 'file_' . $abj;
                ?>

                    <h4>Pilihan <?= $ABJ ?> <?= $soal->jawaban === $ABJ ? $benar : "" ?></h4>
                    <?= $soal->$opsi ?>

                <?php endforeach; ?>


                <a href="<?= base_url('administrator/question') ?>" class="btn btn-sm  bg-gradient-secondary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
                
            </div>
        </div>
    </div>
</div>