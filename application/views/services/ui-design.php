<?php $this->load->view('header'); ?>

    <div class="main-wrapper slider-area ui-design">
        <!--LayerSlider begin-->
        <div class="class-slider bg-01">
            <div class="c-left-area">
                <img src="<?php echo base_url('assets/images/service/other/laptop.png'); ?>" alt="laptop">
            </div>
            <div class="c-right-area">
                <h2>Get your website and application UI designed from us</h2>
                <p>Satisfaction — guaranteed!!</p>
                <a class="sli-button" href="<?php echo base_url('contact'); ?>">Order now<span>></span></a>
            </div>
        </div>
    </div>
    
    <div class="service-item single">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="span9 offset1">
                        <h2 class="content-title">User Interface Design</h2>
                        <p class="service-main-content">
                        We, the Clipping Path Family is providing User Interface Design Services for Mobile &amp; Desktop based Applications, Android UI Designs, Game UI Designs and Web UI Designs. we firstly go through each of our client’s applications or Web interface to know where the visitors are going to, how they interact, what the difficulties they are facing and how faster or slower the visitors are on any particular pages or tabs. Then we design or architect those pages in that way so that the browsing become faster, navigation become easier and information finding process become lots more comfortable. And this is the process our Team always work and assures you the 100% guarantee on each designs we make for you. Just give us the idea; and we will make that come true exactly as you and your ultimate end user expects. So, go for good ui designs and make a difference in the web.</p>
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