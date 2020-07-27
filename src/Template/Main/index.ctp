<?php use Cake\Utility\Inflector; ?>
<?php use Cake\Utility\Text; ?>
<?php use Cake\ORM\TableRegistry; ?>
<?php $this->ProductPrices = TableRegistry::get('ProductPrices'); ?>
<section class="flip" id="" data-rv-view="">
  <div class="container">
    <div class="media-container-row container pt-5 mt-2">

      <div class="col-12 col-md-6 mb-4">
        <div class="card flip-card p-5 align-center">
          <div class="card-front card_cont">
            <img src="images/man.jpg" alt="" title="" media-simple="true">
          </div>
          <div class="card_back card_cont">
            <h4 class="card-title display-5 py-2 mbr-fonts-style">FOR MAN</h4>
            <p class="mbr-text mbr-fonts-style display-7">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet enim et massa tincidunt volutpat a vel lorem. Pellentesque ullamcorper.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 mb-4">

        <div class="card flip-card p-5 align-center">
          <div class="card-front card_cont">
            <img src="images/woman.jpg" alt="" title="" media-simple="true">
          </div>
          <div class="card_back card_cont">
            <h4 class="card-title py-2 mbr-fonts-style display-5">FOR WOMAN</h4>
            <p class="mbr-text mbr-fonts-style display-7">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet enim et massa tincidunt volutpat a vel lorem. Pellentesque ullamcorper.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="offer-feature">
  <div class="container">
    <div class="media-container-row">
      <div class="ranta-figure" style="width: 85%;">
        <img src="<?= $this->Url->build("/webroot/images/offer.jpg") ?>" alt="" title="" media-simple="true">
      </div>

      <div class="media-content">
        <h1 class="ranta-section-title ranta-white pb-3 ranta-fonts-style display-1">
                RENT YOUR STUFF</h1>

        <div class="ranta-section-text ranta-white pb-3 ">
          <p class="ranta-text ranta-fonts-style display-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet enim et massa tincidunt volutpat a vel lorem. Pellentesque ullamcorper.
          </p>
        </div>
        <div class="ranta-section-btn"><a class="btn btn-md btn-primary display-4" href="<?php echo $this->Url->build("/rent-stuff"); ?>">LEARN MORE</a></div>
      </div>
    </div>
  </div>
</section>

<section class="tab-gallery">
  <div class="container">
    <div class="tabs tabs-style-linebox">
      <nav>
        <ul>
          <?php $start = 1; foreach( $tabProductCategories as $cat ){ ?>
            <?php 
              $add_tab_class = '';
              if( $start == 1 ){
                $add_tab_class = 'tab-current';
              }              
            ?>
            <li class="<?php echo $add_tab_class; ?>"><a href="#section-linebox-<?php echo $cat->id; ?>"><span><?php echo $cat->name; ?></span></a></li>
          <?php $start++;} ?>          
        </ul>
      </nav>

      <div class="content-wrap">
      <?php $start_tab = 1; foreach($tabProducts as $key => $products){ ?>
        <?php 
          $add_tab_active = '';
          if( $start_tab == 1 ){
            $add_tab_active = 'content-current';
          }
        ?>
        <section id="section-linebox-<?php echo $key; ?>" class="<?php echo $add_tab_active; ?>">  
          <div class="media-container-row2 container">        
        <?php foreach($products as $p){ ?>
          <?php 
              $product_slug = Inflector::slug($p->name, "-"); 
              if( $p->cover_image != '' ){
                  $product_image = $this->Url->build("/webroot/upload/product_images/" . $p->id . "/" . $p->cover_image);
              }else{
                  $product_image = $this->Url->build("/webroot/images/logo.png");        
              }      
          ?>
          <div class="card col-12 col-md-3 align-center">
            <div class="ranta-figure"><a href="<?php echo $this->Url->build('/product/' . $p->id . '/' . $product_slug); ?>">
              <img src="<?php echo $product_image; ?>" alt="Product Image" title="<?php echo $p->name; ?>" media-simple="true"></a>
              <p class="text-product"><?php echo $p->name; ?></p>
              <p class="text-product-price"><?php echo $this->Number->currency($p->rental_price, "MYR"); ?></p>
            </div>
          </div>
        <?php } ?>
          </div>
        </section> 
      <?php $start_tab++; } ?>       
     </div>
      <!-- /content -->
    </div>
    <!-- /tabs -->
  </div>
</section>

        <section class="mbr-section qoutes" id="">
  <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(118, 118, 118);">
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="media-container-column title col-12 col-lg-7 col-md-6">

        <h2 class="align-left mbr-bold mbr-fonts-style display-2">
                RENT AND NOT THROW AWAY</h2>
      </div>
      <div class="media-container-column col-12 col-lg-3 col-md-4">

      </div>
    </div>
  </div>
</section>

   <section class="category" id="">
  <div class="container">
    <h2 class="mbr-section-title align-center pb-5 mbr-fonts-style display-2">
        Choose your favourite categories</h2>
    <div class="media-container-row">
      <div class="col-12 col-md-8">
        <ul class="nav nav-tabs">
          <?php foreach($randProductCategories as $cat){ ?>
            <li class="nav-item">
              <?php $category_slug = Inflector::slug($cat->name, "-"); ?>
              <a class="nav-link mbr-fonts-style active display-7" href="<?php echo $this->Url->build('/products/listing/' . $cat->id . '/' . $category_slug); ?>">
                 <?php echo $cat->name; ?>
               </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="feature-section">
  <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);">
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="card p-3 col-12 col-md-6 col-lg-4">
        <div class="media-container-row">
          <div class="card-img pr-2">
            <span class="mbr-iconfont mbri-delivery" style="color: rgb(255, 255, 255);" media-simple="true"></span>
          </div>
          <div class="card-box">

            <h4 class="card-title py-3 mbr-fonts-style display-5">
                       <i class="fa fa-truck" style="color: #ff3131;"></i> 
                     Free Delivery</h4>
            <p class="mbr-text mbr-fonts-style display-7">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;In sit amet enim et massa tincidunt volutpat a vel lorem. </p>
          </div>
        </div>
      </div>

      <div class="card p-3 col-12 col-md-6 col-lg-4">
        <div class="media-container-row">
          <div class="card-img pr-2">
            <span class="mbr-iconfont mbri-hearth" style="color: rgb(255, 255, 255);" media-simple="true"></span>
          </div>
          <div class="card-box">
            <h4 class="card-title py-3 mbr-fonts-style display-5">
              <i class="fa fa-heart" style="color: #ff3131;"></i>
                        Good Quality</h4>
            <p class="mbr-text mbr-fonts-style display-7">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet enim et massa tincidunt volutpat a vel lorem.
            </p>
          </div>
        </div>
      </div>

      <div class="card p-3 col-12 col-md-6 col-lg-4">
        <div class="media-container-row">
          <div class="card-img pr-2">
            <span class="mbr-iconfont mbri-smile-face" style="color: rgb(255, 255, 255);" media-simple="true"></span>
          </div>
          <div class="card-box">
            <h4 class="card-title py-3 mbr-fonts-style display-5">
              <i class="fa fa-thumbs-up" style="color: #ff3131;"></i>
                        Trusted</h4>
            <p class="mbr-text mbr-fonts-style display-7">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet enim et massa tincidunt volutpat a vel lorem.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>