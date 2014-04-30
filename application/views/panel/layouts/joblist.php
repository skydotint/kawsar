

<?php //var_dump($alljobs) ?>
<div class="row">
    <div class="col-md-3">
        Legend 
    </div>
    <div class="col-md-9">
        <span class="badge badge-warning badge-roundless">&nbsp </span>&nbsp 1/2 time &nbsp <span class="badge badge-info badge-roundless">&nbsp</span> 1/4time &nbsp; <span class="badge badge-secondary badge-roundless"> &nbsp  </span> &nbsp not completed but time over &nbsp <span class="badge badge-roundless">&nbsp;</span> completed but with extra time &nbsp<span class="badge badge-success badge-roundless">&nbsp;</span>&nbsp completed within time &nbsp
    </div>
</div>

<br />

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
            <li class="active"><a href="#home" data-toggle="tab">Current Jobs</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <div class="" data-height="120">
                    <nav class="navbar navbar-inverse" role="navigation">
                        <div class="menu">

                            <a class="navbar-brand" >Filter</a>

                            <form class="navbar-form navbar-left">
                                <select name="carlist" form="carform" placeholder="stts">
                                    <option value="volvo">opt-1</option>
                                    <option value="saab">opt-2</option>
                                    <option value="opel">opt-3</option>
                                    <option value="audi">opt-4</option>
                                </select>

                            </form>

                            <div class="form-group">
                                <a class="navbar-brand" >Job Date From</a>

                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">

                                        <div class="input-group-addon">
                                            <a href="#"><i class="entypo-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <a class="navbar-brand" >To</a>

                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">

                                        <div class="input-group-addon">
                                            <a href="#"><i class="entypo-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <form class="navbar-form navbar-left">
                                    <button type="submit" class="btn btn-default">Reset</button>
                                </form>

                            </ul>                                

                            <ul class="nav navbar-nav navbar-right">
                                <form class="navbar-form navbar-left">
                                    <button type="submit" class="btn btn-default">Filter</button>
                                </form>

                            </ul>


                        </div>

                </div>
            </div>
            </nav>  
            <?php if ($alljobs) { ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Job Title</th>
                            <th>Email</th>
                            <th>Customer Name</th>
                            <th>Service Type</th>
                            <th>Priority</th>
                            <th>Instruction</th>
                            <th>Image Count</th>
                            <th>Amount</th>
                            <th>Payment</th>
                            <th>Created</th>
                            <th>Finished</th>
                            <th>TAT</th>
                            <th>Job Status</th>
                            <th>Assigned</th>
                            <th>Comment</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($alljobs as $singlejob) { ?>
                        <tr class="half_time one_fourth_time not_completed_but_time_over completed_but_with_extra_time completed_within_time">
                            <td><a href="<?php echo base_url(); ?>index.php/jobsingle"><?php echo $singlejob->id  ?></a></td>
                            <td><?php echo $singlejob->name  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                            <td><?php echo $singlejob->status  ?></td>
                            <td><?php echo $singlejob->status  ?></td>
                            <td><?php echo $singlejob->id  ?></td>
                        </tr>
                        <?php } ?>
<!--                        <tr class="one_fourth_time">
                            <td>1</td>
                            <td>Arlind</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                        </tr>
                        <tr class="not_completed_but_time_over">
                            <td>1</td>
                            <td>Arlind</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                        </tr>
                        <tr class="completed_but_with_extra_time">
                            <td>1</td>
                            <td>Arlind</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                        </tr>
                        <tr class="completed_within_time">
                            <td>1</td>
                            <td>Arlind</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Arlind</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                            <td>Nushi</td>
                        </tr>-->
                    </tbody>
                </table>	
            <?php } else { ?>
                <p style="color:#0000;">Currently  There is no Job.</p>
            <?php } ?>
        </div>
    </div>
</div>


