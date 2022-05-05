<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-headphones-alt"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">
                    Listening
                    <?php if ($user_exam->listening_status == 1) : ?>
                        <span class="badge badge-primary float-right">Completed <i class="fas fa-check"></i></span>
                    <?php else : ?>
                        <span class="badge badge-danger float-right">Not Completed <i class="fas fa-times"></i></span>
                    <?php endif; ?>
                </span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-book-reader"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">
                    Reading
                    <?php if ($user_exam->reading_status == 1) : ?>
                        <span class="badge badge-primary float-right">Completed <i class="fas fa-check"></i></span>
                    <?php else : ?>
                        <span class="badge badge-danger float-right">Not Completed <i class="fas fa-times"></i></span>
                    <?php endif; ?>
                </span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-marker"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">
                    Writing
                    <?php if ($user_exam->writing_status == 1) : ?>
                        <span class="badge badge-primary float-right">Completed <i class="fas fa-check"></i></span>
                    <?php else : ?>
                        <span class="badge badge-danger float-right">Not Completed <i class="fas fa-times"></i></span>
                    <?php endif; ?>
                </span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-headset"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">
                    Speaking
                    <?php if ($user_exam->speaking_status == 1) : ?>
                        <span class="badge badge-primary float-right">Completed <i class="fas fa-check"></i></span>
                    <?php else : ?>
                        <span class="badge badge-danger float-right">Not Completed <i class="fas fa-times"></i></span>
                    <?php endif; ?>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Detail</div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Name :</td>
                        <td><?= $user['name'] ?></td>
                        <td>Email :</td>
                        <td><?= $user['email'] ?></td>
                    </tr>

                    <tr>
                        <td>Test Name :</td>
                        <td><?= $exam->name ?></td>
                    </tr>
                    <tr>
                        <td>Question :</td>
                        <td><?= $exam->question_count ?></td>
                        <td>Duration :</td>
                        <td><?= $exam->time ?> Minutes</td>
                    </tr>
                    <tr>
                        <td>Expired Date :</td>
                        <td><?= $exam->end_date ?></td>
                    </tr>



                </table>
            </div>
            <div class="card-footer">
                <a href="<?= base_url('exam') ?>" class="btn btn-sm btn-secondary" title="Back"><i class="fas fa-arrow-left"></i> Back</a>
                <a href="#" class="btn btn-sm btn-primary" title="Start Test" id="start"> Start <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = '<?php echo base_url() ?>';
    $(document).ready(function() {
        $('#start').click(function() {
            var id = '<?php echo $user_exam->id ?>';
            $.ajax({
                url: base_url + '/exam/insertId',
                method: 'post',
                data: {
                    id: id
                },
                success: function(data) {
                    window.location.href = base_url + "/listening";
                }
            });
        });
    });
</script>