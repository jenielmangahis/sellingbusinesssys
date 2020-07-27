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
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> -->
    <?php
 
        echo $this->Html->css('bootstrap.min.css');
        //echo $this->Html->css('main.css');
        echo $this->Html->css('styles.css');

        echo $this->Html->css('font-awesome.min.css');
        echo $this->Html->meta('icon');
 
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>

    <script>
        var BASE_URL = '<?= $this->Url->build("/") ?>';
    </script>

    <link rel="shortcut icon" href="<?= $this->Url->build("/webroot/img/") ?>favicon.ico">

</head>

<body class="">
    <header class="header">
        <?php include("inner_header.ctp"); ?>
    </header>

    <div class="full-bread">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h3><?= __($otherPage->title) ?></h3>
            </div>
            <?php echo $this->element('breadcrumb'); ?>
        </div>
    </div>
    </div>    

    <div class="full-box-n-big-image">
    <div class="container">
        <?= $this->Html->image('service.jpg',["alt" => "Services" , "class" => "img-responsive"]) ?>
    </div>
    </div>

    <div class="full-box-n-who">
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    </div>

    <div class="full-box-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                  <?= $this->Html->image('team.jpg',["class" => "img-responsive"]) ?>
                  <h2>Heading</h2>
                  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                  <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                  <?= $this->Html->image('team.jpg',["class" => "img-responsive"]) ?>
                  <h2>Heading</h2>
                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                  <?= $this->Html->image('team.jpg',["class" => "img-responsive"]) ?>
                  <h2>Heading</h2>
                  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                  <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
    </div>

    <div class="full-box-ads">
        <div class="container">
            <h3>We've worked with</h3>
            <div class="row">
                <div class="col-md-2">          
                    <?= $this->Html->image('nixser.png',["class" => "img-responsive"]) ?>
                </div>
                <div class="col-md-2">          
                    <?= $this->Html->image('nixser.png',["class" => "img-responsive"]) ?>
                </div>
                <div class="col-md-2">          
                    <?= $this->Html->image('nixser.png',["class" => "img-responsive"]) ?>
                </div>
                <div class="col-md-2">          
                    <?= $this->Html->image('nixser.png',["class" => "img-responsive"]) ?>
                </div>
                <div class="col-md-2">          
                    <?= $this->Html->image('nixser.png',["class" => "img-responsive"]) ?>
                </div>          
                <div class="col-md-2">          
                    <?= $this->Html->image('nixser.png',["class" => "img-responsive"]) ?>
                </div>      
        
            </div>
        </div>
    </div>  

    <footer>
        <?php include("inner_footer.ctp"); ?>
    </footer>  
      
</body>
</html>
