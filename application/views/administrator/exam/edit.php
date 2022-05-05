<?= $this->session->flashdata('message') ?>
<div class="card mb-2">
    <div class="card-header bg-primary">
    </div>
    <div class="card-body">
        <?= form_open('administrator/exam/store') ?>
        <div class="form-group">
            <input type="hidden" name="id_exam" value="<?= $exam->id_exam ?>">
            <label for="">Exam Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" placeholder="Exam name" required value="<?= $exam->name ?>">
            <?= form_error('name', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="">Question <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="question_count" readonly required value="<?= $exam->question_count ?>">
            <?= form_error('question_count', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="">Time <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="time" placeholder="Exam name" readonly required value="<?= $exam->time ?>">
            <?= form_error('time', '<small class="text-danger">', '</small>') ?>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Start Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="start_date" required placeholder="Start Date">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">End Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="end_date" required placeholder="End Date">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Certificate <span class="text-danger">*</span></label>
                    <select name="certificate" id="certificate" class="form-control">
                        <option disable selected> -- Select -- </option>
                        <option value="1"> ENABLE</option>
                        <option value="0"> DISABLE</option>

                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">TOKEN <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="token" required placeholder="Token" value="<?= $exam->token ?>">
                    <?= form_error('token', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>

        </div>
    </div>
    <div class="card-footer text-center">
        <a href="<?= base_url('administrator/exam') ?>" title="Cancel" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Cancel</a>
        <button type="submit" title="Submit" class="btn btn-sm btn-primary">Save <i class="fas fa-save"></i></button>
    </div>
    <?= form_close() ?>
</div>