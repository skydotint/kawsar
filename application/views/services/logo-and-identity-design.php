<?php $this->load->view('header'); ?>

    <div class="main-wrapper slider-area logo-identify">
        <!--LayerSlider begin-->
        <div class="class-slider bg-02">
            <div class="c-left-area fadeInDown">
                <img src="<?php echo base_url('assets/images/service/other/company.png'); ?>" alt="company">
            </div>
            <div class="c-right-area fadeInRightBig">
                <h2>Get a logo design you’ll love — guaranteed</h2>
                <p>Great Quality, all Custom-Made Logo Design</p>
                <a class="sli-button" href="<?php echo base_url('contact'); ?>">Order now<span>></span></a>
            </div>
        </div>
    </div>
    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">Identity Design</h2>
                        <p class="service-main-content">
                        We design your Brand in professional way & provide you the best Logo, Business Cards, Catalogues, Envelops, Company Letterhead, Name Card, Compliments Slip, Company pad and Stationary stuffs design ever. Our world-class design team ensures each design to be unique and creative which not only represents your brand value and motive perfectly to the audiences and prospective customers but also creates the very first impressions positively to own a big impact as a company for forever. So, if you are looking for any affordable services regarding the corporate identity design, Brand Identity Design, Company Logo Design and Business Identity Design; then you are in right place. Just place your order below and let us do the rest of the tasks accurately by using Photoshop & Illustrator according to your requirements and fixed timeframe.</p>
                    </div>
                    <div class="span2 thumb">
                        <img class="man-cut right" src="<?php echo base_url('assets/images/man-cutting.png'); ?>" alt="man-cutting">
                    </div>
                    <div class="clear"></div>
                    <div class="span12">
                        <div class="trial-button-area">
                            <a href="<?php echo base_url('contact'); ?>" class="trial-button">Order Now</a>
                        </div>
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