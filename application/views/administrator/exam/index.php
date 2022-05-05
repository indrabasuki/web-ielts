<?= $this->session->flashdata('message') ?>
<div class="card mb-2">
    <div class="card-header bg-primary">
    </div>
    <div class="card-body">
        <div class="table-responsive px-4 pb-3" style="border: 0">
            <table class="w-100 table ">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Exam Name</th>
                        <th>Question</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Certificate</th>
                        <th>Token</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($exam as $item) : ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $item->name ?></td>
                            <td><?= $item->question_count ?></td>
                            <td><?= $item->question_count ?> Minutes</td>
                            <td><?= $item->start_date ?>
                                <hr>
                                <?= $item->end_date ?>
                            </td>
                            <?php if ($item->certificate == 1) : ?>
                                <td><span class="badge badge-success">Print Certifcate ENABLE</span></td>
                            <?php else : ?>
                                <td><span class="badge badge-danger">Print Certifcate DISABLE</span></td>
                            <?php endif; ?>
                            <td> <?= $item->token ?></td>
                            <td>
                                <a href="<?= base_url('administrator/exam/show/') . $item->id_exam ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                <a href="<?= base_url('administrator/exam/edit/') . $item->id_exam ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>