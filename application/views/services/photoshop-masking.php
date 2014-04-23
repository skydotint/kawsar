<?php $this->load->view('header'); ?>
    <div class="main-wrapper slider-area">
        <ul class="sliding">
            <li class="item-1">
                <div class="default" style="background: url(<?php echo base_url('assets/images/service/item-05-02.png'); ?>) no-repeat;"></div>
                <div class="another_area"></div>
                <div class="moving" style="background: url(<?php echo base_url('assets/images/service/item-05-01.png'); ?>) no-repeat;"></div>
            </li>
        </ul>
    </div>
    
    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <p class="content-title">Photoshop Clipping Mask</p>
                        <p class="service-main-content">
                        Clipping Mask by Photoshop requires brilliancy in techniques and skills in precise image masking tasks like Erasing and Regular Masking, Channel Masking, Color Masking, Color Masking, Layer Masking, Transparency Masking and Alpha Masking. Providing accurate masking to any kind of complex images are our expertise and that is why we are confidently serving all the industry leaders like Print Media, Advertising Agency, Press, Store Chains, Franchise Companies, Online Retailers and so on. Our experienced and world-class designers ensure precise isolation of images with subtle edges along with covering all the aspects of Photoshop image masking services.  Our photo masking technology will help you to reduce your overall cost by processing bulk amount of photos at a time at precisely and within your  lowest budget ever.</p>
                    </div>
                    <div class="span2 thumb">
                        <img class="man-cut right" src="<?php echo base_url('assets/images/masking.png'); ?>" alt="masking">
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
                    <h3 class="we-are-head">Service At a Galance</h3>
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