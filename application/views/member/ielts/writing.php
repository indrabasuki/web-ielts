<div class="container">
    <div class="row ">
        <div class="col-md-12 mt-4">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3">
                            <h3 class="card-title">WRITING</h3>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-writing1" data-toggle="pill" href="#tabs-writing-1" role="tab" aria-controls="tabs-writing-1" aria-selected="true">TASK 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabs-writing2" data-toggle="pill" href="#tabs-writing-2" role="tab" aria-controls="tabs-writing-2" aria-selected="false">TASK 2</a>
                        </li>


                    </ul>
                </div>
                <div class="card-body">
                    <?= form_open('writing/store') ?>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="tab-content" id="custom-tabs-two-tabContent">
                        <!-- part1 -->
                        <div class="tab-pane fade show active" id="tabs-writing-1" role="tabpanel" aria-labelledby="tabs-writing1">
                            <div class="card-body">
                                <p>
                                    <strong>WRITING TASK 1</strong>
                                </p>
                                <p>You should spend about 20 minutes on this task.</p>
                                <p>
                                    <b>The charts below show the percentage of water used for different purposes in six areas of the world.</b>
                                    <br>
                                    <b>
                                        Summarise the information by selecting and reporting the main features, and make comparisons where relevant.
                                    </b>
                                    <br>
                                    Write at least 150 words.
                                </p>
                                <hr>
                                <p class="text-center">
                                    <b>Percentage of water used for different
                                        purposes in six areas of the world
                                    </b>
                                </p>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="<?= base_url('public/img/wlzfykumbilhokfggswm.png') ?>" width="" alt="">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Your Answer <span class="text-danger">* Max 150 words</span></label>
                                            <textarea maxlength="150" name="params_1" class="form-control" id="" cols="30" rows="20"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end part1 -->

                        <!-- part2 -->
                        <div class="tab-pane fade" id="tabs-writing-2" role="tabpanel" aria-labelledby="tabs-writing2">
                            <div class="card-body">
                                <p>
                                    <strong>WRITING TASK 2</strong>
                                </p>
                                <p>You should spend about 40 minutes on this task.</p>
                                <p>Write about the following topic:</p>
                                <p><b>
                                        Some people say that advertising is extremely successful at persuading us to buy things. Other people think that advertising is so much common that we no longer pay attention to it.</b>
                                    <br>
                                    <b>
                                        Discuss both these views and give your own opinion.
                                    </b>
                                </p>
                                <p>Give reasons for your answer and including any relevant examples from your own knowledge or experience. <br>
                                    Write at least 250 words.
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Your Answer <span class="text-danger">* Max 250 words</span></label>
                                            <textarea maxlength="250" name="params_2" class="form-control" id="" cols="30" rows="20"><?= set_value('params_2') ?></textarea>
                                            <?= form_error('params_2') ?>
                                        </div>
                                    </div>
                                </div>
                                <button onclick="javascript:return confirm('Are you sure ?')" class="btn btn-primary" id="submit" type="submit">Submit <i class="fas fa-check"></i></button>
                            </div>
                        </div>
                        <!--end  part2 -->

                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(":input").keyup(function() {
            $(this).val($(this).val().toUpperCase());

        });
    });
</script>s