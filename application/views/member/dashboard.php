<div class="row">
    <div class="col-md-12 mb-3">
        <h5>Welcome , <?= $user['name'] ?></h5>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="info-box">
            <img src="<?= base_url('public/img/logo.jpeg') ?>" width="100" alt="">
            <div class="info-box-content">
                <h2>TEST IELTS with Golden English <a href="<?= base_url('exam') ?>" title="Start" class="btn btn-primary float-right">Start Test <i class="fas fa-play"></i></a>
                </h2>
            </div>


        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box bg-info">
            <div class="info-box-content">
                <span class="info-box-text">IELTS TEST COMPLETED</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description text-center">
                    <h5> 70% Increase in 30 Days</h5>
                </span>
            </div>

        </div>

    </div>
</div>