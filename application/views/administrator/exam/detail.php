<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Exam Detail</h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Estimated budget</span>
                                    <span class="info-box-number text-center text-muted mb-0">2300</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Total amount spent</span>
                                    <span class="info-box-number text-center text-muted mb-0">2000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Estimated project duration</span>
                                    <span class="info-box-number text-center text-muted mb-0">20</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td><?= $exam->name ?></td>
                    </tr>
                    <tr>
                        <td>Question </td>
                        <td><?= $exam->question_count ?> Question</td>
                    </tr>
                    <tr>
                        <td>Time </td>
                        <td><?= $exam->time ?> Minutes</td>
                    </tr>
                    <tr>
                        <td>Date </td>
                        <td><?= $exam->start_date ?>
                            <hr>
                            <?= $exam->end_date ?>
                        </td>
                    </tr>
                    <tr>
                        <td>TOKEN </td>
                        <td>
                            <h4> <?= $exam->token ?></h4>
                        </td>
                    </tr>
                    <tr>
                        <td>Certificate </td>
                        <?php if ($exam->certificate == 1) : ?>

                            <td><span class="badge badge-success">Print Certifcate ENABLE</span></td>
                        <?php else : ?>
                            <td><span class="badge badge-danger">Print Certifcate DISABLE</span></td>
                        <?php endif; ?>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="<?= base_url('administrator/exam') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
            <a href="<?= base_url('administrator/exam/edit/') . $exam->id_exam ?>" class="btn btn-sm btn-warning">Edit <i class="fas fa-edit"></i></a>
        </div>

    </div>

</section>