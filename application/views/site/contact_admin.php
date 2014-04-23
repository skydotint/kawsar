<?php $this->load->view('header'); ?>
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="we-are">
                        <span class="left-shadow"></span>
                        <h3 class="we-are-head">Contact Us - Admin</h3>
                        <span class="right-shadow"></span>
                    </div>
                    <div class="c-contact">
                        <div class="row">
                            <div class="span12">
                                <table class="table table-striped">
                                    <thead>
                                        <th>SN</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach ($contact as $value) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo date('dS M, y', $value['date']); ?></td>
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php echo $value['email']; ?></td>
                                            <td><?php echo $value['phone']; ?></td>
                                            <td><?php echo $value['country']; ?></td>
                                            <td><?php echo $value['subject']; ?></td>
                                            <td><?php echo $value['message']; ?></td>
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
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>