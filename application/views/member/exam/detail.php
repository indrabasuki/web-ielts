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
                <div class="col-md-6 offset-3">
                    <div class="form-group mt-3">
                        <input autofocus autocomplete="off" id="token" placeholder="Token" type="text" class="input-sm form-control">
                    </div>
                </div>

            </div>

            <div class="card-footer text-center">
                <a href="<?= base_url('exam') ?>" class="btn btn-sm btn-secondary" title="Back"><i class="fas fa-arrow-left"></i> Back</a>
                <a href="#" class="btn btn-sm btn-primary" title="Start Test" id="btncek"> Start <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var base_url = ' <?php echo base_url() ?>';
    var member_id = '<?= $user['id_user'] ?>';

    $(document).ready(function() {
        $("#token").keyup(function() {
            $(this).val($(this).val().toUpperCase());
        });
        $('#btncek').on('click', function() {
            var token = $('#token').val();
            var id_user_exam = '<?= $user_exam->id ?>';
            var key = '<?= sha1($user_exam->id) ?>';
            if (token === '') {
                Swal.fire('Error', 'Token is required', 'error');
                $("#token").focus();

            } else {
                $.ajax({
                    url: base_url + 'exam/cektoken',
                    type: 'POST',
                    data: {
                        token: token,
                        id_user_exam: id_user_exam,

                    },
                    cache: false,
                    success: function(result) {
                        Swal.fire({
                            "icon": result.status ? "success" : "error",
                            "title": result.status ? "Success" : "Failed",
                            "text": result.status ? "Token Is Correct" : "Wrong Token "
                        }).then((data) => {
                            if (result.status) {
                                Swal.fire({
                                    "icon": "info",
                                    "title": "Information",
                                    "text": "LISTENING COMPREHENSION "
                                }).then((data) => {
                                    if (result.status) {
                                        location.href = base_url + 'listening/?key=' + key + '&id_user_exam=' + id_user_exam + '&member_id=' + member_id;
                                    }
                                });
                            } else {
                                Swal.fire({
                                    "icon": "error",
                                    "title": "Error",
                                    "text": "Error 404"
                                });
                            }
                        });
                    }
                });
            }
        });
    });
</script>