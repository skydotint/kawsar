<?php include('header.php'); ?>
	<div class="container">
		<div class="formarea">
            <form id="form1">
                <div class="stage-01">
                    <h1>Step 2. Design brief</h1>
                    <h2>Describe what you want to our design community.</h2>
                    <p>To produce the perfect design, our designers need to know exactly what you're looking for. Be as specific as you can to ensure you attract as many designers as possible - it helps to stand out!</p>
                </div>

                <label for="languages">What language will you write your brief in?</label>

                <select id="languages" name="language">
                    <option value="en" selected="selected">English</option>
                    <option value="es">Español</option>
                </select>

                <fieldset id="business-details" class="fieldset">

                    <!-- business_name -->
                    <label for="business-name">What name do you want in your logo?</label>
                    <input id="business-name" name="business_name" type="text">
                    <div class="helpful-info"><p><strong>E.g.</strong> Acme</p></div>

                    <!-- slogan -->
                    <label for="slogan">Do you have a slogan you want incorporated in your logo?</label>
                    <input id="slogan" name="slogan" type="text">
                    <div class="helpful-info">
                        <p><strong>Tip:</strong> Leave blank if you don't want one incorporated.</p>
                    </div>

                    <!-- business_purpose -->
                    <label for="business-purpose">Describe what your organization or product does and its target audience</label>
                    <textarea id="business-purpose" name="business_purpose"></textarea>
                    <div class="helpful-info">
                        <p><strong>E.g.</strong> We sell anvils and other industrial goods to manufacturing
                        companies and hobbyists all over the world.</p>
                    </div>

                    <!-- business_industry -->
                    <label for="business-industry">Select your industry</label>
                    <select id="bussines-industry" name="business_industry">
                        <option value=""> - Select industry - </option>
                        <option value="accounting">Accounting &amp; Financial</option>
                        <option value="agriculture">Agriculture</option>
                        <option value="animals">Animal &amp; Pet</option>
                        <option value="architectural">Architectural</option>
                        <option value="art">Art &amp; Design</option>
                        <option value="attorney">Attorney &amp; Law</option>
                        <option value="automotive">Automotive</option>
                        <option value="bar">Bar &amp; Nightclub</option>
                        <option value="business">Business &amp; Consulting</option>
                        <option value="children">Childcare</option>
                    </select>
                </fieldset>

                <fieldset id="logo-type-selection" class="fieldset">
                    <legend class="fieldset-title">Select the types of logos you like</legend>

                    <p class="fieldset-instructions">Please choose <span class="highlight">up to 3</span> different options you might like explored.</p>

                    <ul id="logo-types">
                        <!-- Word mark -->
                        <li class="logo-type">
                            <label for="word-mark">
                                <span class="example-img-wrapper">
                                    <img class="example-img" src="<?php echo base_url('assets/images/form/acme-wordmark.png'); ?>">
                                </span>
                                <span class="selection">
                                    <input id="word-mark" type="checkbox" value="word_mark">
                                    <span class="logo-type-label">Word mark</span>
                                </span>
                                <span class="description">
                                    <p>Your company name in a stylised type/font becomes the logo.</p>
                                </span>
                            </label>
                        </li>

                        <li class="logo-type">
                            <label for="word-mark">
                                <span class="example-img-wrapper">
                                    <img class="example-img" src="<?php echo base_url('assets/images/form/acme-wordmark.png'); ?>">
                                </span>
                                <span class="selection">
                                    <input id="word-mark" type="checkbox" value="word_mark">
                                    <span class="logo-type-label">Word mark</span>
                                </span>
                                <span class="description">
                                    <p>Your company name in a stylised type/font becomes the logo.</p>
                                </span>
                            </label>
                        </li>

                        <li class="logo-type">
                            <label for="word-mark">
                                <span class="example-img-wrapper">
                                    <img class="example-img" src="<?php echo base_url('assets/images/form/acme-wordmark.png'); ?>">
                                </span>
                                <span class="selection">
                                    <input id="word-mark" type="checkbox" value="word_mark">
                                    <span class="logo-type-label">Word mark</span>
                                </span>
                                <span class="description">
                                    <p>Your company name in a stylised type/font becomes the logo.</p>
                                </span>
                            </label>
                        </li>

                        <li class="logo-type">
                            <label for="word-mark">
                                <span class="example-img-wrapper">
                                    <img class="example-img" src="<?php echo base_url('assets/images/form/acme-wordmark.png'); ?>">
                                </span>
                                <span class="selection">
                                    <input id="word-mark" type="checkbox" value="word_mark">
                                    <span class="logo-type-label">Word mark</span>
                                </span>
                                <span class="description">
                                    <p>Your company name in a stylised type/font becomes the logo.</p>
                                </span>
                            </label>
                        </li>

                        <li class="logo-type">
                            <label for="word-mark">
                                <span class="example-img-wrapper">
                                    <img class="example-img" src="<?php echo base_url('assets/images/form/acme-wordmark.png'); ?>">
                                </span>
                                <span class="selection">
                                    <input id="word-mark" type="checkbox" value="word_mark">
                                    <span class="logo-type-label">Word mark</span>
                                </span>
                                <span class="description">
                                    <p>Your company name in a stylised type/font becomes the logo.</p>
                                </span>
                            </label>
                        </li>
                    </ul>
                </fieldset>

                <div id="design-examples-container">
                    <div class="design-examples-component">
                        <fieldset class="fieldset">
                            <div class="design-examples-controls-wrapper">
                                <legend class="fieldset-title">Do you have any example logos you like?</legend>
                                <p class="fieldset-instructions">Providing designers with examples helps them identify the style and aesthetic you like.</p>

                                <div class="controls">
                                    <input type="button" alt="Browse for logos on your computer" value="Upload a logo">
                                    <input type="button" value="Select logos from our sample gallery">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <fieldset class="fieldset" id="logo-style-selection">
                    <legend class="fieldset-title as-field-label">What values should your logo communicate?</legend>

                    <ul id="logo-values">
                        <li class="logo-value">
                            <span class="left-label slider-label">Feminine</span>
                            <span class="ui-slider"></span>
                            <span class="right-label slider-label">Masculine</span>
                        </li>
                        <li class="logo-value">
                            <span class="left-label slider-label">Feminine</span>
                            <span class="ui-slider"></span>
                            <span class="right-label slider-label">Masculine</span>
                        </li>
                        <li class="logo-value">
                            <span class="left-label slider-label">Feminine</span>
                            <span class="ui-slider"></span>
                            <span class="right-label slider-label">Masculine</span>
                        </li>
                        <li class="logo-value">
                            <span class="left-label slider-label">Feminine</span>
                            <span class="ui-slider"></span>
                            <span class="right-label slider-label">Masculine</span>
                        </li>
                        <li class="logo-value">
                            <span class="left-label slider-label">Feminine</span>
                            <span class="ui-slider"></span>
                            <span class="right-label slider-label">Masculine</span>
                        </li>
                        <li class="logo-value">
                            <span class="left-label slider-label">Feminine</span>
                            <span class="ui-slider"></span>
                            <span class="right-label slider-label">Masculine</span>
                        </li>
                        <li class="logo-value">
                            <span class="left-label slider-label">Feminine</span>
                            <span class="ui-slider"></span>
                            <span class="right-label slider-label">Masculine</span>
                        </li>
                        <li class="logo-value">
                            <span class="left-label slider-label">Feminine</span>
                            <span class="ui-slider"></span>
                            <span class="right-label slider-label">Masculine</span>
                        </li>
                    </ul>
                </fieldset>

                <fieldset class="fieldset" id="where-used">
                    <legend class="fieldset-title">Where will your logo be used?</legend>
                    <ul class="checkbox-list" id="logo-used">
                        <li>
                            <input type="checkbox" class="checkbox" value="print" name="placesused[]" id="used-print">
                            <label class="logo-type-label" for="used-print">Print (Business cards, letterheads, brochures etc)</label>
                        </li>

                        <li>
                            <input type="checkbox" class="checkbox" value="online" name="placesused[]" id="used-online">
                            <label class="logo-type-label" for="used-online">Online (Website, online advertising, banner ads etc)</label>
                        </li>

                        <li>
                            <input type="checkbox" class="checkbox" value="merch" name="placesused[]" id="used-merch">
                            <label class="logo-type-label" for="used-merch">Merchandise (Mugs, T-shirts etc)</label>
                        </li>

                        <li>
                            <input type="checkbox" class="checkbox" value="signs" name="placesused[]" id="used-signs">
                            <label class="logo-type-label" for="used-signs">Signs (Including shops, billboards etc)</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" value="screen" name="placesused[]" id="used-screen">
                            <label class="logo-type-label" for="used-screen">Television/screen</label>
                        </li>
                    </ul>
                </fieldset>

                <fieldset class="fieldset" id="business-cards">
                    <legend class="fieldset-title">Would you like business cards designed with your logo?</legend>
                    <ul class="radio-list">
                        <li>
                            <input type="radio" value="no" name="has-stationery" id="no-stationery">
                            <label for="no-stationery">No, I just want a logo thanks</label>
                        </li>
                        <li>
                            <input type="radio" value="yes" name="has-stationery" id="yes-stationery">
                            <label for="yes-stationery">Yes, I'd like a business card designed as well (from +$150)</label>
                        </li>
                    </ul>
                    <div class="helpful-info">
                        <p><strong>Tip:</strong> We recommend settling on a logo design first and then working with the designers in the latter days
                        of your contest to design the business cards.</p>
                    </div>
                    <div class="hide" id="business-card-details-container">
                        <label class="fieldset-title as-field-label">What details need to go on your business cards?</label>
                        <textarea class="textarea" name="details" id="business-card-details" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 70px;"></textarea>
                        <div class="helpful-info">
                            <p>
                            <strong>Eg:</strong> On the front your logo and website address. On the back your name title, email address and phone.
                            </p>
                        </div>
                        <label class="label">Would you like a free quote to print your business cards?</label>
                        <ul class="checkbox-list">
                            <li>
                                <input type="radio" checked="" value="1" class="radio" name="printing_quote" id="printing_quote_yes">
                                <label for="printing_quote_yes">Yes - I'd like a 99designs printing partner to contact me with a free, no obligation quote</label>
                            </li>
                            <li>
                                <input type="radio" value="0" class="radio" name="printing_quote" id="printing_quote_no">
                                <label for="printing_quote_no">No - I will organize printing myself</label>
                            </li>
                        </ul>
                    </div>
                </fieldset>

                <fieldset class="fieldset" id="deliverables">
                    <legend class="fieldset-title">What you'll get - the deliverables</legend>
                    <div class="helpful-info">
                        Based on your requests, you'll receive the following file types at the end of your contest:
                        <div class="deliverables-wrapper">
                            <ol class="deliverables-list">
                                <li><strong>EPS &amp; PDF</strong> - Print quality files that can be used by other designers and printers.</li>
                                <li><strong>JPEG &amp; PNG</strong> - Screen quality files that can be used for websites and presentations.</li>
                            </ol>
                            <a href="#" id="add-deliverable">I require other specific formats...</a>
                            <div class="deliverables-info">
                                <p class="helpful-info"><strong>Note:</strong> EPS &amp; PDF files are editable in Adobe Illustrator</p>
                                <input type="text" value="" name="extra_deliverable" class="text">
                            </div>
                            <p class="helpful-info fonts-message"><strong>Note:</strong> Fonts used will be detailed by the designer but are not provided for licensing reasons.</p>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="fieldset last" id="attach">
                    <legend class="fieldset-title as-field-label">Do you have any images, sketches or documents that might be helpful?</legend>
                    <!-- Upload widget -->
                    <div id="upload-widget">
                        <span id="browse-files" style="position: relative; z-index: 0;">
                            <input type="file" class="file" name="browse_files">
                        </span>
                        <div class="helpful-info">
                            <p><strong>E.g.</strong> Your current logo, photos, illustrations, content, layout ideas etc.</p>
                        </div>
                    </div>
                </fieldset>

                <legend class="fieldset-title as-field-label">Is there anything else you would like to communicate to the designers?</legend>

                <textarea class="textarea" name="comments" id="comments" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 70px;"></textarea>

                <div id="launch-control-panel" style="display: block;">
                    <ul id="launch-actions">
                        <li class="launch-action-item">
                            <button type="submit" class="launch-action button--primary" id="next" href="#/details/logo-design">Next</button>
                        </li>

                        <li class="launch-action-item">
                            <button href="#" class="launch-action button--secondary translate" id="save">Save now</button>
                        </li>
                        <li class="launch-action-item last" id="save-status"></li>
                    </ul>
                    <div id="post-launch-update-msg">
                        <span>Note: You can upload files and update your brief after you've started your contest.</span>
                    </div>
                </div>
                <div id="guarantee-msg">
                    <h5 class="guarantee-title">100% Money Back Guarantee</h5>
                    <p class="guarantee-tagline">A design you love or your money back</p>
                </div>
            </form>
		</div>
	</div>
<?php include('footer.php'); ?>