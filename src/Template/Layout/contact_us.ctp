<?php include_once("header.ctp"); ?>
<?php include_once("nav.ctp"); ?>
    
<section class="page-title"  style="background-image: url('<?= $this->Url->build("/webroot/img/") ?>page-header-contact.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="pull-left">Contact us</h1>
        <ul class="breadcrumb pull-right">
            <li><a href="<?php echo $this->Url->build('/main/'); ?>">Home</a></li>
            <li>Contact us</li>
        </ul>
    </div>
</section>



<div class="wrapper">
    <?= $this->fetch('content') ?>
    <?php include_once("footer-banner.ctp"); ?>

</div>

<?php include_once("footer.ctp"); ?>