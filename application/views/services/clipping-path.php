<?php $this->load->view('header'); ?>
    <div class="main-wrapper slider-area">
        <ul class="sliding">
            <li class="item-1">
                <div class="default" style="background: url(<?php echo base_url('assets/images/service/item-01-02.png'); ?>) no-repeat;"></div>
                <div class="another_area"></div>
                <div class="moving" style="background: url(<?php echo base_url('assets/images/service/item-01-01.png'); ?>) no-repeat;"></div>
            </li>
        </ul>
    </div>
    
    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">Photoshop Clipping Path</h2>
                        <p class="service-main-content">
                        Our Photoshop Clipping Path specialists professionally use Photoshop Pen Tool and In-design to ensure the highest level of quality output as per client’s requirement within the fast turnaround time. We handle whole tasks of image Clipping Path services by Photoshop for precise processing of each image you want us to edit. We have been in the Photo Editing industry for so long because of our care to each image clipping services and the expertise on processing, retouching and polishing images at utmost level with 100% proficiency. Brilliancy on all Clipping Path services named Regular Clipping Path, Multiple Clipping Path, Overlapping Clipping Path and perfect image cut out made us the best in the industry purposing to serve for Photo Studios, Publishers, Design Agencies, Brands, Chain Stores and Manufacturing Companies.</p>
                    </div>
                    <div class="span2 thumb">
                        <img class="man-cut right" src="<?php echo base_url('assets/images/clipping.png'); ?>" alt="man-cut-clipping">
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