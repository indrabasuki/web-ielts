<div class="row">
    <div class="col-md-12">
        <div class="table-reponsive">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Certificate List</h3>
                </div>

                <div class="card-body p-0">
                    <table class="table table-sm">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Serial Number</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($user_certficate) : ?>
                                <?php
                                $no = 1;
                                foreach ($user_certficate as  $item) : ?>
                                    <tr class="text-center">
                                        <td><?= $no++ ?>.</td>
                                        <td><?= $exam->name ?></td>
                                        <td><?= $item->seri ?></td>
                                        <td><a class="btn btn-primary btn-sm" href="">Download <i class="fas fa-download"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td class="text-center">
                                        <div class="error-page">
                                            <h2 class="headline text-warning"> 404</h2>
                                            <div class="error-content">
                                                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Data not found.</h3>
                                                <p>
                                                    No certificate data<a href="<?= base_url('dashboard') ?>">return to dashboard</a>
                                                </p>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>