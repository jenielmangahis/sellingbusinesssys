    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <?= $this->Html->image('page-banner.jpg', ['class' => 'first-slide']); ?>
          <!-- <img class="first-slide" src="images/page-banner.jpg" alt="First slide"> -->
          <div class="container">
            <div class="carousel-caption">
			  <div class="row">
			  <h1><?php echo $page_title; ?></h1>
			  <p><a href="<?php echo $this->Url->build('/', true); ?>">Home</a> / <a href="#"><?php echo $page_title; ?></a></p>
			  </div>
            </div>
          </div>
        </div>

 
        </div>
      </div>
    </div><!-- /.carousel -->