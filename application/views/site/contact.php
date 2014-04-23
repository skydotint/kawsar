<?php $this->load->view('header'); ?>
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="we-are">
                        <span class="left-shadow"></span>
                        <h3 class="we-are-head">Contact Us</h3>
                        <span class="right-shadow"></span>
                    </div>
                    <div class="c-contact">
                        <div class="row">
                            <div class="span6 form-area">
                                <h3>Send us a mail</h3>
                                <form action="<?php echo base_url('cpf/send_contact'); ?>" method="post">
                                    <?php echo $this->session->flashdata('send_status'); ?>
                                    <ul class="contact-form">
                                        <li class="name">
                                            <span></span>
                                            <input type="text" name="name" placeholder="Your Name" />
                                        </li>
                                        <li class="email">
                                            <span></span>
                                            <input type="email" name="email" placeholder="Your E-mail" />
                                        </li>
                                        <li class="phone">
                                            <span><i class="icon-phone"></i></span>
                                            <input type="text" name="phone" placeholder="Your Phone" />
                                        </li>
                                        <li class="country">
                                            <span><i class="icon-globe"></i></span>
                                            <input type="text" name="country" placeholder="Your Country" />
                                        </li>
                                        <li class="subject">
                                            <span></span>
                                            <input type="text" name="subject" placeholder="Subject" />
                                        </li>
                                        <li class="text-area">
                                            <span></span>
                                            <textarea name="message" placeholder="Your message........."></textarea>
                                        </li>
                                        <li class="send-button">
                                            <input type="submit" value="Send" />
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <div class="span6 address-area">
                                <h3>Office Locations</h3>
                                <ul class="location-list row">
                                    <li class="span2">
                                        <p class="location-name">Canada:</p>
                                        <p>152 Heale Avenue<br/>
                                        Scarborough Ontario<br/>
                                        Zip: m1n3y1<br/>
                                        Canada</p>
                                    </li>
                                    <li class="span2">
                                        <p class="location-name">USA:</p>
                                        <p>41-30,43rd Street<br/>
                                        Sunnyside<br/>
                                        NY-11104<br/>
                                        USA</p>
                                    </li>
                                    <li class="span2">
                                        <p class="location-name">Bangladesh:</p>
                                        <p>House 697, Road 11<br/>
                                        Baitul Aman Housing, Adabar<br/>
                                        Dhaka-1207<br/>
                                        Bangladesh</p>
                                    </li>
                                </ul>
                                <ul class="contact-list">
                                    <li class="mobile-number">
                                        <p><a href="callto:+8801926662723">+8801926662723</a></p>
                                    </li>
                                    <li class="email-address">
                                        <a href="mailto:info@clippingpathfamily.com">info@clippingpathfamily.com</a>
                                    </li>
                                </ul>
                                <div class="map">
                                    <iframe width="420" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=206533284994332189421.0004e709e44781d4baba4&amp;ie=UTF8&amp;t=m&amp;ll=23.772758,90.35167&amp;spn=0.003436,0.00456&amp;z=17&amp;iwloc=0004e709fc09bf5e4a1b1&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>