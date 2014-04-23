<?php defined('BASEPATH') OR exit('No direct script access allowed');

$title = isset($title)?$title:'';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo site_seo_title($title); ?></title>
    <meta name="google-site-verification" content="HBIdfukqAT4EWWLvSB8xLWHgkdPhZdU3d8gd4XDNeJA" />
    <meta name="msvalidate.01" content="2CE4F1CDA764A57E3C2588D393AE9E59" />
    <meta name="alexaVerifyID" content="NTy8TiklnxqE0ldAvPHRBSRQaok" />
    
    
    <!-- CSS Include -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/client-end.css'); ?>">
    
    <!-- IE 7 Supports -->
    <!--[if IE 7]>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome-ie7.min.css'); ?>">
    <![endif]-->
    
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
    <div id="header-client">
        <div class="container">
            <div class="main-wrapper row">
                <div class="top-area-client">
                    <div class="span3"><a href="" class="logo">Clippingpathfamily</a></div>
                    <div class="span7">
                        <ul class="menu">
                            <li class="item"><a href="" class="home">home</a></li>
                            <li class="item current">
                                <a href="" class="settings">Settings</a>
                                <ul class="sub-menu">
                                    <li class="items"><a href="" class="">Account</a></li>
                                    <li class="items"><a href="" class="">Billing Information</a></li>
                                    <li class="items"><a href="" class="">Notification Settings</a></li>
                                </ul>
                            </li>
                            <li class="item"><a href="" class="pickdrop">Pick &amp; Drop</a></li>
                            <li class="item"><a href="" class="notification">Notification</a></li>
                        </ul>
                    </div>
                    <div class="span2 text-right user-meta">
                        <a href="" class="chat">Chat</a>
                        <a href="" class="user"></a>
                    </div>
                </div>
            </div>
            <div id="back-to-top"></div>
        </div>
    </div>
	<div class="main-body">