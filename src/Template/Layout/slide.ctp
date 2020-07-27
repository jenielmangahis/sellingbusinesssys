<div id="carousel" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner">

        <?php $ai = 1; ?>
        <?php foreach($slides as $slide) { ?>
                <?php $ai == 1 ? $active = 'active' : $active = ''; ?>
                <div class="item <?php echo $active; ?>">
                  <img src="<?php echo $slide->thumbnail; ?>" alt="" class="Slide Image">                      
                  <div class="carousel-caption hidden-xs">
					<h1 data-animate="bounceInDown" class="bounceInDown animated"><?php echo $slide->caption; ?></h1>
				  </div>
                </div>  
                <?php $ai++; ?>
        <?php } ?>
    </div>		
	<!-- Controls -->
	<a class="left carousel-control hidden-xs" href="#carousel" data-slide="prev">
		<span class="glyphicon glyphicon-menu-left"></span>
	</a>
	<a class="right carousel-control hidden-xs" href="#carousel" data-slide="next">
		<span class="glyphicon glyphicon-menu-right"></span>
	</a>
</div>