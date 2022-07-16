<?php
$site = $this->mConfig->list_config();
?>
<!DOCTYPE html>
<html html ⚡ lang="id-ID">
    <head>
        <meta charset="utf-8">
        <!-- title initiate -->
        <title><?php echo $title; ?></title>
        <!-- Mobile Specific Metas
          ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="<?php echo $site['metatext']; ?>">
        <meta name="keywords" content="<?php echo $site['keywords']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
        
        <link href="<?php echo base_url(); ?>" rel="canonical">  <!-- Load amp-analytics -->
        <!--<script async custom-element="amp-analytics" src="<?php echo base_url('assets/front/default/js/');?>amp-analytics-0.1.js"></script>-->
        <style amp-boilerplate> 
            @import url('<?php echo base_url();?>assets/front/default/css/style-body.css');
        </style>
        <noscript>
            <style amp-boilerplate> 
                @import url('<?php echo base_url();?>assets/front/default/css/style-body-noscript.css');
            </style>
        </noscript>
        <link rel="shortcut icon" href="<?php echo base_url('assets/upload/image/').$site['icon'] ?>" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <script custom-element="amp-sidebar" src="<?php echo base_url('assets/front/default/js/');?>amp-sidebar-0.1.js" async></script>
        <script custom-element="amp-accordion" src="<?php echo base_url('assets/front/default/js/');?>amp-accordion-0.1.js" async></script>
        <script async custom-element="amp-form" src="<?php echo base_url('assets/front/default/js/');?>amp-form-0.1.js"></script>
        <script custom-element="amp-video" src="<?php echo base_url('assets/front/default/js/');?>amp-video-0.1.js" async></script>
        <script async custom-element="amp-bind" src="<?php echo base_url('assets/front/default/js/');?>amp-bind-0.1.js"></script>
        <script async custom-element="amp-selector" src="<?php echo base_url('assets/front/default/js/');?>amp-selector-0.1.js"></script>
        <!-- Import the carousel component in the header. -->
        <script async custom-element="amp-carousel" src="<?php echo base_url('assets/front/default/js/');?>amp-carousel-0.1.js"></script>
        <!--<script async custom-element="amp-fit-text" src="<?php echo base_url('assets/front/default/js/');?>amp-fit-text-0.1.js"></script>-->
        
        <style amp-custom > 
            @import url('<?php echo base_url();?>assets/front/default/css/style.css');
        </style>
        <script async src="<?php echo base_url();?>assets/front/default/js/v0.js"></script>
        <style>
            .loader {
                position:fixed;
                left:0;
                top:0;
                width:100%;
                height:100%;
                z-index:9999;
                background: <?php echo $site['color']; ?> url(<?php echo base_url();?>assets/front/default/img/loader.gif) 50% 50% no-repeat;
            }
        </style>
    </head>
    <body>
        <div class="loader"></div>
