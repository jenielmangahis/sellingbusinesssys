<?php use Cake\Utility\Inflector; ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-main" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?= $this->Url->build("/webroot/img/") ?>logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="nav-main">
            <ul class="nav navbar-nav navbar-right">
                <?php if(!empty($nav_selected)) { ?>
                    <li <?php echo $nav_selected[0] == 'home' ? 'class="active"' : ''; ?>><a href="<?php echo $this->Url->build('/main/'); ?>">Home</a></li>
                <?php } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>