<?php defined('BASEPATH') OR exit('No direct script access allowed');

$title = isset($title)?$title:'';


// if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')){
//     ob_start("ob_gzhandler");
// } else {
//     ob_start();
// }

// if (extension_loaded("zlib") && (ini_get("output_handler") != "ob_gzhandler")) {
//     ini_set("zlib.output_compression", 1);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo site_seo_title($title); ?></title>
    <meta name="google-site-verification" content="HBIdfukqAT4EWWLvSB8xLWHgkdPhZdU3d8gd4XDNeJA" />
    <meta name="msvalidate.01" content="2CE4F1CDA764A57E3C2588D393AE9E59" />
    <meta name="alexaVerifyID" content="NTy8TiklnxqE0ldAvPHRBSRQaok" />
    
    <!-- Font embeding -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'> -->
    
    <!-- CSS Include -->
    <?php if (ENVIRONMENT=='development') { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/lavalamp.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/layerslider/css/layerslider.css'); ?>">
    <?php } else { ?>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/lavalamp.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/layerslider/css/layerslider.min.css'); ?>">
    <?php } ?>
    
    <!-- IE 7 Supports -->
    <!--[if IE 7]>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome-ie7.min.css'); ?>">
    <![endif]-->

    <!-- Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.min.css'); ?>">

    <?php if (ENVIRONMENT=='development') { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <?php } else { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.min.css'); ?>">
    <?php } ?>
    
    <?php if (isset($add_css) && !empty($add_css)) {
        if (is_array($add_css)) {
            foreach ($add_css as $value) { 
            ?>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'. $value .'.css'); ?>">
            <?php 
            }
        } else {
        ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/'. $add_css .'.css'); ?>">
        <?php 
        }
    } ?>

    <?php if (isset($meta_desc)) { ?>
        <meta name="description" content="<?php echo $meta_desc; ?>">
    <?php } ?>

    <?php if (isset($meta_key)) { ?>
        <meta name="keywords" content="<?php echo $meta_key; ?>">
    <?php } ?>

    <meta property="og:type" content="website">     
    <meta property="og:url" content="http://www.clippingpathfamily.com/">
    <meta property="og:title" content="Complete Solutions To Design & Image Editing Project">     
    <meta property="og:image" content="<?php echo base_url('assets/images/logo.png'); ?>">     
    <meta property="og:description" content="Providing affordable & professional services on Holistic Image Editing, Identity Designs & Web UI Designs within your timeframe with 100% Quality assurance.">

    <link rel="canonical" href="<?php echo current_url(); ?>"/>

    <script type="text/javascript">
        var base_url = '<?php echo base_url ();?>';
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-45527792-1', 'clippingpathfamily.com');
        ga('send', 'pageview');
    </script>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=366685830126558";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <header id="header">
        <div class="sub-area">
            <div class="main-wrapper fixed-area">
                <div class="top-area">
                    <div class="container">
                        <div class="row">
                            <div class="span4">
                                <ul class="top-menu">
                                    <!-- <li><a href="<?php echo base_url('about'); ?>">About us</a></li> -->
                                    <!-- <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li> -->
                                    <li><a href="<?php echo base_url('faq'); ?>">FAQ</a></li>
                                    <!-- <li><a href="<?php echo base_url('help'); ?>">Help</a></li> -->
                                </ul>
                            </div>
                            <div class="span8 text-right">
                                <?php echo form_open("auth/login");?>
                                <ul class="user-system">
                                <?php 
                                if ($this->ion_auth->logged_in()) {
                                ?>
                                    <li>
                                        <a class="new-order btn btn-success" href="<?php echo base_url('order/create'); ?>"><i class="icon-upload"></i> Upload Images</a>
                                    </li>
                                    <li>
                                        <a class="my-account btn btn-danger" href="#<?php //echo base_url('user/dashboard'); ?>"><i class="icon-cogs"></i> My Account</a>
                                    </li>
                                    <li>
                                        <a class="exit btn" href="<?php echo base_url('auth/logout'); ?>"><i class="icon-signout"></i> Logout</a>
                                    </li>
                                <?php 
                                } else {
                                    $identity = array('name' => 'identity',
                                        'id' => 'identity',
                                        'type' => 'text',
                                        'placeholder' => 'Email',
                                        'value' => $this->form_validation->set_value('identity'),
                                    );
                                    $password = array('name' => 'password',
                                        'id' => 'password',
                                        'type' => 'password',
                                        'placeholder' => 'Password',
                                        'value' => $this->form_validation->set_value('password'),
                                    );
                                ?>
                                    <li class="mail-area">
                                        <?php echo form_input($identity);?>
                                        <span class="forget-button"><a href="#">?</a></span>
                                    </li>
                                    <li class="password-area">
                                        <?php echo form_input($password);?>
                                        <span class="forget-button"><a href="#">?</a></span>
                                    </li>
                                    <li class="login-area">
                                        <?php echo form_submit('submit', 'Log In');?>
                                    </li>
                                    <!-- <li class="signUp-area">
                                        <a href="<?php echo base_url('auth/register'); ?>">Sign Up</a>
                                    </li> -->
                                <?php } ?>
                                </ul>
                                <?php echo form_close();?>
                                <ul class="search-area">
                                    <li>
                                        <a href="#"><i class="icon-search"></i></a>
                                        <div class="search-box">
                                            <input type="text" placeholder="Search" />
                                            <input type="submit" value="" />
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-area-controller"><p>-</p></div>
            </div>
            <div class="main-wrapper head-area">
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <span class="logo"><a href="<?php echo base_url(); ?>">Clipping path family</a></span>
                        </div>
                        <div class="span8">
                            <div class="main-menu-area">
                                <!-- lavaLamp class is require for lavaLamp effect -->
                                <ul class="main-menu lavaLamp">
                                    <li><a href="<?php echo base_url(); ?>" class="active">Home</a></li>
                                    <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                                    <!-- <li><a href="<?php echo base_url('portfolio'); ?>">Portfolio</a></li> -->
                                    <li><a href="#<?php //echo base_url('services'); ?>">Services +</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo base_url('clipping-path'); ?>">Clipping Path</a></li>
                                            <li><a href="<?php echo base_url('photoshop-masking'); ?>">Masking</a></li>
                                            <li><a href="<?php echo base_url('color-masking'); ?>">Color Masking</a></li>
                                            <li><a href="<?php echo base_url('photo-retouch'); ?>">Retouching</a></li>
                                            <li><a href="<?php echo base_url('old-photo-restoration'); ?>">Old Photo restoration</a></li>
                                            <li><a href="<?php echo base_url('neck-join'); ?>">Neck Join</a></li>
                                            <li><a href="<?php echo base_url('mannequin-removal'); ?>">Invisible man</a></li>
                                            <li><a href="<?php echo base_url('shadow-creation'); ?>">Shadow Creation</a></li>
                                            <li><a href="<?php echo base_url('reflection-creation'); ?>">Reflation creation</a></li>
                                            <li><a href="<?php echo base_url('cropping-resize'); ?>">Cropping &amp; Resize</a></li>
                                            <li><a href="<?php echo base_url('web-image-optimization'); ?>">Web image optimization</a></li>
                                            <li><a href="<?php echo base_url('logo-and-identity-design'); ?>">Logo and identity design</a></li>
                                            <li><a href="<?php echo base_url('ui-design'); ?>">UI Design</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="#">UI Design</a></li>
                                    <li><a href="#">Identity Design</a></li> -->
                                    <li><a href="<?php echo base_url('price'); ?>">Price</a></li>
                                    <li><a href="<?php echo base_url('howitworks'); ?>">How It works</a></li>
                                    <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                                    <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="back-to-top"></div>
        </div>
    </header>
	<div class="main-body">