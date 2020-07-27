<!DOCTYPE html>
<html lang="en-us">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Homelux : <?= (isset($page_title) ? $page_title : $this->fetch('title')) ?>
    </title>

    <!-- Bootstrap core CSS -->  
    <?php
        echo $this->Html->meta('icon');
      
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('font-awesome.min');
        //echo $this->Html->css('main');
        echo $this->Html->css('styles');
 
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>

    <script>
        var BASE_URL = '<?= $this->Url->build("/") ?>';
    </script>

    <link rel="shortcut icon" href="<?= $this->Url->build("/webroot/img/") ?>favicon.ico">

    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:600,400,300" /> -->
</head>

<body class="">
    <header class="header">
        <?php include("inner_header.ctp"); ?>
    </header>

    <div class="full-bread">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h3><?= __("Contact Us") ?></h3>
            </div>
            <?php echo $this->element('breadcrumb'); ?>
        </div>
    </div>
    </div>    

    <div class="full-box-n-text">
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    </div>      

    <footer>
        <?php include("inner_footer.ctp"); ?>
    </footer>  
      
</body>
</html>