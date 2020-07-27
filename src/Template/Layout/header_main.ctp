<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">    
    <title><?= COMPANY_NAME . ' : ' ?> <?php echo( isset($mt_for_layout) ? $mt_for_layout : $page_title ); ?></title>    
    <meta name="keywords" content="<?php if(isset($mk_for_layout)) { echo $mk_for_layout; } ?>">
    <meta name="description" content="<?php if(isset($md_for_layout)) { echo $md_for_layout; } ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('front/bootstrap.min');             
            echo $this->Html->css('front/bootstrap-grid.min'); 
            echo $this->Html->css('front/style'); 
            echo $this->Html->css('front/font-awesome'); 
            echo $this->Html->css('front/header'); 
            echo $this->Html->css('front/tabs'); 
            echo $this->Html->css('front/offcanvas'); 
            if( isset($load_datetime_picker) ){
                echo $this->Html->css('jquery-ui-timepicker-addon');             
                echo $this->Html->css('jquery-ui');             
            } 
            
            if( isset($load_product_js) ){
                //echo $this->Html->css('front/products.bootstrap.min');                 
            }

            if( isset($load_cart) ){
                echo $this->Html->css('front/cart');                 
            }

            if( isset($enable_star_rating) ){
                echo $this->Html->css('jquery.rateyo.min.css');
            }

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>        
    <link rel="shortcut icon" href="<?= $this->Url->build("/webroot/ico/") ?>favicon.ico">        
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-57-precomposed.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
</head>
<body>