<div class="row">
    <div class="col-md-12 mb-3">
        <h5>Welcome , <?= $user['name'] ?></h5>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="info-box">
            <img src="<?= base_url('public/img/logo.jpeg') ?>" width="100" alt="">
            <div class="info-box-content">
                <h2>TEST IELTS with Golden English <a href="<?= base_url('exam') ?>" title="Start" class="btn btn-primary float-right">Start Test <i class="fas fa-play"></i></a>
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-12">
        <!-- small box -->
        <div class="small-box bg-info" id="test">
            <div class="inner">
                <h3 class="text-white"><?= $completed ?> / <?= $total_test ?></h3>
                <p class="text-white">Test Completed / Total Test </p>
            </div>
            <div class="icon">
                <i class="fas fa-file text-white"></i>
            </div>
            <a href="<?= base_url('exam') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <!-- small box -->
        <div class="small-box bg-info " id="certificate">
            <div class="inner">
                <h3 class="text-white"><?= $completed ?>/ <?= $total_test ?></h3>
                <p class="text-white">Certificate Test</p>
            </div>
            <div class="icon">
                <i class="fas fa-barcode text-white"></i>
            </div>
            <a href="<?= base_url('certificate') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>