<?php include('header_error.ctp'); ?>
<!-- <div id="main-container">
    <div id="main-holder">        
        <div id="left-holder"><?php //include('menu_wrap.ctp'); ?>
        	<div class="menu-wrap-inner">

			 <a href="<?= $base_url; ?>"><?= $this->Html->image('/images/logo.png',['class' => 'logo-big']) ?></a>        

			</div>
        </div>
        <div id="app-content-holder">   -->
        	 
        	<?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
<!--         </div>
    </div>
</div> -->

<?php include('footer.ctp'); ?>