<?php $this->load->view('header'); ?>
    <div class="main-wrapper slider-area">
        <ul class="sliding">
            <li class="item-1">
                <div class="default" style="background: url(<?php echo base_url('assets/images/service/item-07-01.png'); ?>) no-repeat;"></div>
            </li>
        </ul>
    </div>
    
    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">Old Photo Restoration</h2>
                        <p class="service-main-content">
                        We are an experienced photo restorations service team online and repairing old photos along with restoring old photos according to buyer’s expectation without any slight deviation of the original image is our expertise. We, the Clipping Path Family is the best in Industry who ensures enhanced images in better quality by a smart photo restoration process. Our team is specially trained for restoring photo no matter how old or torn it is. Our image editing team capable to reconstruct and recompose photos by dispatching background, removing fixed dust, scars, scratches and odd discolored sports along with the beautiful and brilliant implementation of color contrast, color levels, hue of Photoshop tool within digital photo restoration process. We are providing old photo restoration services to Photo Studios, Photographers, Press, Advertising Agencies and thousands of happy customers in across the world.</p>
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