<section>
  <header>
    <?php 
      $total_slides = $slides->count();
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php for($x = 0; $x < $total_slides; $x++){ ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $x; ?>" class="<?php echo($x == 0 ? 'active' : ''); ?>"></li>
        <?php } ?>        
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php $counter = 1; ?>
        <?php foreach($slides as $slide) { ?>
          <?php 
            if($counter == 1){
              $image_slider_class = 'carousel-item active';
            }else{
              $image_slider_class = 'carousel-item';
            }
          ?>
          <div class="<?php echo $image_slider_class; ?>" style="background-image: url('<?php echo $slide->image; ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3><?php echo $slide->caption; ?></h3>
              <p></p>
            </div>
          </div>
        <?php $counter++;} ?>        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
</section>