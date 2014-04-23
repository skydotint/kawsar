<?php $this->load->view('header'); ?>
    <div class="main-wrapper slider-area">
        <ul class="sliding">
            <li class="item-1">
                <div class="default" style="background: url(<?php echo base_url('assets/images/service/item-04-01.png'); ?>) no-repeat;"></div>
                <div class="moving" style="background: url(<?php echo base_url('assets/images/service/item-04-02.jpg'); ?>) no-repeat;"></div>
            </li>
        </ul>
    </div>
    
    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">Invisible man / mannequin removal service</h2>
                        <p class="service-main-content">
                        Our sophisticated image editing team handle the mannequin removal service for any kind of complex images by matching the color, shapes, fitting and hue. To make a dummy picture flawless and to remove all the unwanted parts from the images published by dressmakers, shop owners, clothing display image publishers, artists and jewelers; the Graphic department of Clipping Path Family ensures the international standard that would go beyond your imagination at a very competitive prices and within the shortest period of time ever. We offer Ghost image manipulation and invisible man/mannequin removal services to website publishers, ecommerce site owners, DTP Studios, Photo Studios, Store Chains, Manufacturing Companies and Wholesalers, Brands and for private usages. Our experiences and care to each editing made us reliable, professional and the one-stop choices to work for a long term.</p>
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