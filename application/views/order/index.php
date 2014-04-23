<?php $this->load->view('client/header'); ?>
    <div class="fullwidth-area">
        <div class="container jobs jobs-dashboard">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title">Current Jobs <a class="new-order btn btn-success" href="<?php echo base_url('order/create'); ?>"><i class="icon-plus"></i> Add New Job</a></h1>
                    <?php echo $this->session->flashdata('message'); ?>
                    <?php echo $this->session->flashdata('ftp_creat'); ?>
                    <table class="table table-hover table-striped table-bordere">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Completed</th>
                                <th>No of Image</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Payment</th>
                                <th>Invoice</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        // echo "<pre>";
                        // print_r($jobs);
                        // echo "</pre>";
                        if (count($jobs)>0) {
                            foreach ($jobs as $job) {
                                if ($job['name'] == NULL) {
                                    continue;
                                }
                            ?>
                            <tr>
                                <td><?php echo $job['job_tbl_id']; ?></td>
                                <td><?php echo $job['name']; ?></td>
                                <td><?php echo date('d-m-Y', $job['created']); ?></td>
                                <td><?php echo date('d-m-Y', $job['completed']); ?></td>
                                <td><?php echo $job['no_of_image']; ?></td>
                                <td><?php echo $job['status']; ?></td>
                                <td><?php echo $job['total']; ?></td>
                                <td><?php echo $job['pay_status']; ?></td>
                                <td><?php echo $job['invoice_tbl_id']; ?></td>
                                <td><?php echo $job['invoice_tbl_id']; ?></td>
                            </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">You don't have any job, <a href="<?php echo base_url('order/create'); ?>">create a new job now</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('client/footer'); ?>