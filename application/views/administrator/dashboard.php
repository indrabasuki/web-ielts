<div class="row">
    <div class="col-md-6">
        <?= $this->session->flashdata('new_member_msg') ?>
        <div class="card mt-1">
            <div class="card-header bg-gradient-success"><strong>Member Baru</strong></div>
            <?php if ($new_member) : ?>
                <div class="card-body">
                    <div class="table-responsive px-4 pb-3" style="border: 0">
                        <table class="table table-bordered">
                            <tbody>
                                <?php $no = 1;
                                foreach ($new_member as $i) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $i->name ?> <sup class="text-primary"><strong> <?= $i->email ?></strong></sup></td>
                                        <td class="text-center"><a class="btn btn-sm bg-gradient-success" href="<?= base_url('administrator/dashboard/activate/') . "" . $i->id_user ?>">Aktivasi <i class="fas fa-user-check"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php else : ?>
                <div class="card-body">
                    <h4 class="text-center">Tidak ada data</h4>
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#new').click(function() {
            window.location.href = base_url + "administrator/member/new";
            return false;
        });
        $('#all').click(function() {
            window.location.href = base_url + "administrator/member";
            return false;
        });

        $('#active').click(function() {
            window.location.href = base_url + "administrator/member/active";
            return false;
        });
    });

    $(function() {
        'use strict'

        var ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }

        var mode = 'index'
        var intersect = true

        var $memberChart = $('#member-chart')
        // eslint-disable-next-line no-unused-vars
        var memberChart = new Chart($memberChart, {
            type: 'bar',
            data: {
                labels: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'Mei',
                    'Jun',
                    'Jul',
                    'Ags',
                    'Sep',
                    'Okt',
                    'Nov',
                    'Des'
                ],
                datasets: [{
                        backgroundColor: '#007bff',
                        borderColor: '#007bff',
                        data: [
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-01-01' AND '2022-01-31'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-02-01' AND '2022-02-28'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-03-01' AND '2022-03-31'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-04-01' AND '2022-04-30'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-05-01' AND '2022-05-31'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-06-01' AND '2022-06-30'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-07-01' AND '2022-07-31'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-08-01' AND '2022-08-31'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-09-01' AND '2022-09-30'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-10-01' AND '2022-10-31'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-11-01' AND '2022-11-30'")->num_rows() ?>,
                            <?= $this->db->query("SELECT * FROM user WHERE create_at BETWEEN '2022-12-01' AND '2022-12-31'")->num_rows() ?>

                        ]
                    },

                ]
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    mode: mode,
                    intersect: intersect
                },
                hover: {
                    mode: mode,
                    intersect: intersect
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        // display: false,
                        gridLines: {
                            display: true,
                            lineWidth: '4px',
                            color: 'rgba(0, 0, 0, .2)',
                            zeroLineColor: 'transparent'
                        },
                        ticks: $.extend({
                            beginAtZero: true,

                            // Include a dollar sign in the ticks
                            callback: function(value) {
                                if (value >= 1000) {
                                    value /= 1000
                                    value += 'k'
                                }

                                return +value
                            }
                        }, ticksStyle)
                    }],
                    xAxes: [{
                        display: true,
                        gridLines: {
                            display: false
                        },
                        ticks: ticksStyle
                    }]
                }
            }
        })
    })
</script>