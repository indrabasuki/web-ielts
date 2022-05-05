<div class="row">
    <div class="col-md-12">
        <?php echo $this->session->flashdata('message') ?>
    </div>
</div>
<div class="row">
    <?php if ($user_exam) : ?>
        <?php foreach ($user_exam as $item) : ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><?= $exam->name ?></div>
                        <div class="card-tools">
                            <?php if ($item->status == 0) : ?>
                                <span type="button" class="badge badge-primary">
                                    AVAILABLE
                                    <i class="fas fa-angle-double-right"></i>
                                </span>
                            <?php elseif ($item->status == 1) : ?>
                                <span type="button" class="badge badge-success">
                                    COMPLETED
                                    <i class="fas fa-check"></i>
                                </span>
                            <?php elseif ($item->status == 2) : ?>
                                <span type="button" class="badge badge-warning">
                                    VERIFICATION
                                    <i class="fas fa-spinner"></i>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>ID : <?= $item->id ?></p>
                        <table class="table text-center">
                            <tr>
                                <td><strong>Duration</strong></td>
                                <td><strong><?= $exam->question_count ?></strong></td>
                            </tr>
                            <tr>
                                <td><?= $exam->time ?> minutes</td>
                                <td>Question</td>
                            </tr>

                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="" class="btn btn-success btn-block <?= $item->status == 0 || $item->status == 2 ? 'disabled' : '' ?>"><i class="fas fa-list-alt"></i> Result</a>
                            </div>
                            <div class="col-md-6">
                                <a href="<?= base_url('exam/detail/') . $item->id ?>" class="btn btn-primary btn-block  <?= $item->status == 1 || $item->status == 2 ? 'disabled' : '' ?>">Start Test <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    <?php else : ?>
        <div class="container">
            <section class="content">
                <div class="error-page">
                    <h2 class="headline text-warning"> 404</h2>
                    <div class="error-content">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Data not found.</h3>
                        <p>
                            We couldn't find your IELTS test. Please contact the administrator to resolve <a href="<?= base_url('dashboard') ?>">return to dashboard</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>

    <?php endif; ?>
</div>



<!-- Modal -->
<div class="modal fade" id="startTestModal" tabindex="-1" role="dialog" aria-labelledby="startTestModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>