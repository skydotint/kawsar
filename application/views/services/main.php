<?php $this->load->view('header'); ?>

    <?php $this->load->view('common/slider'); ?>
    <div class="service-item">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span2 thumb">
                        <img class="man-cut" src="<?php echo base_url('assets/images/man-cutting.png'); ?>" alt="man-cutting">
                    </div>
                    <div class="span10">
                        <h2 class="content-title">Perfect Cut Out</h2>
                        <p class="service-main-content">
                        Provides fully handmade clipping path and background removal service by using Photoshop pen tool at very reasonable price. We provide all types of Adobe Photoshop clipping path services from simple clipping path to super complex. Our quality clipping path or multi clipping path services are offered at speedy  turnaround time and help in save your energy, time.</p>
                    </div>
                </div>
                <?php $this->load->view('services/service-featured-area'); ?>
                <div class="we-are service-galance-area">
                    <span class="left-shadow"></span>
                    <h3 class="we-are-head">Services At A Glance</h3>
                    <span class="right-shadow"></span>
                </div>
                <div class="service-galance">
                    <a href="<?php echo base_url('clipping-path'); ?>"><div class="item-box span3">
                        <div class="img clipping"><img alt="service-galance-clipping" src="<?php echo base_url('assets/images/clipping.png'); ?>"></div>
                        <p class="content-title">Clipping Path</p>
                    </div></a>
                    <a href="<?php echo base_url('photo-retouch'); ?>"><div class="item-box span3">
                        <div class="img retouching"><img alt="service-galance-retouching" src="<?php echo base_url('assets/images/retouching.png'); ?>"></div>
                        <p class="content-title">Image Retouch</p>
                    </div></a>
                    <a href="<?php echo base_url('photoshop-masking'); ?>"><div class="item-box span3">
                        <div class="img masking"><img src="<?php echo base_url('assets/images/masking.png'); ?>" alt="service-galance-masking"></div>
                        <p class="content-title">Masking</p>
                    </div></a>
                    <a href="<?php echo base_url('shadow-creation'); ?>"><div class="item-box span3">
                        <div class="img shadow-creation"><img src="<?php echo base_url('assets/images/shadow-creation.png'); ?>" alt="service-galance-shadow-creation"></div>
                        <p class="content-title">Shadow Creation</p>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>