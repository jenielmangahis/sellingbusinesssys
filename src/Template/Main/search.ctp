<?php use Cake\Utility\Inflector; ?>
<?php use Cake\Utility\Text; ?>
<?php use Cake\ORM\TableRegistry; ?>
<?php $this->ProductPrices = TableRegistry::get('ProductPrices'); ?>
<style>
.product-container h3{
	height: 50px;
}
@media screen and (max-width: 600px) {
	.product-container h3{
		font-size: 18px;
	}	
}
.product-image{
	height: 157px !important;
	
}
.product-listing{
	list-style: none;
	padding: 0px;
}
.product-listing li{
	display: inline-block;
	margin: 10px;
	border:1px solid #ddd;
	padding: 2px;		
}
.product-short-description{
	height:65px;margin-top:10px;
}
.product-price{
	font-weight: bold;
}
.alert{
	padding:2px;
	font-size: 13px;
}
.fade{
  opacity: 1;
  margin-left: 5px;
}
.flash-header{
	padding:10px;
	margin:20px;
	font-size: 15px;
}
.pos_rel{position:relative; float:left;}
.counter {
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    font-size: 13px;
    height: 30px;
    display:none;
    line-height: 12px;
    text-align:center;
    margin-top: -10px;
    min-width: 20px;
    padding: 5px;
    position: absolute;
    right: -36px;
    top: 10%;
}

.pos_rel:hover .counter{display:block;}

  
.counter:before {
    border-color: transparent rgba(0, 0, 0, 0.8) transparent transparent;
    border-style: solid;
    border-width: 5px 5px 5px 0;
    content: "";
    display: block;
    height: 0;
    left: -10px;
    margin-top: -5px;
    position: relative;
    top: 50%;
    width: 0;
}
.rateYo{
    padding: 0px;
}
.product-li:hover .ranta-figure {
  opacity: 0.3;  
}
.product-li:hover .middle {
  opacity: 1;
}
.middle {
  transition: .6s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  z-index: 99999;
}
.product-price{
	display: block;
	margin-bottom: 6px;
}
</style>
<div class="container">    
<?= $this->Flash->render() ?>
    <?php if( $products->count() > 0 ){ ?>
    	<div class="container pt-5 mt-2">    	
	  	<ul class="product-listing">
	  		<?php 	
	  			if( $products->count() == 1 ){
	  				$li_class = "col-md-3";
	  			}elseif( $products->count() > 2 ){
	  				$li_class = "col-md-3";
	  			}else{
	  				$li_class = "col-md-3";
	  			}
	  		?>
		<?php foreach($products as $p){ ?>
			<li class="<?php echo $li_class; ?>">
				<?php 
					$product_slug = Inflector::slug($p->name, "-"); 
					if( $p->cover_image != '' ){
				        $product_image = $this->Url->build("/webroot/upload/product_images/" . $p->id . "/" . $p->cover_image);
				    }else{
				        $product_image = $this->Url->build("/webroot/images/logo.png");        
				    }	

			        $excerpt = Text::truncate($p->excerpt,80,
					    [
					        'ellipsis' => '...',
					        'exact' => false
					    ]
					);
				?>	
		        <div class="card col-12 col-md-12  product-li">
		        	<div class="middle">
				    	<a class="btn btn-success marginBottom10" style="width:100%;" href="<?php echo $this->Url->build('/product/' . $p->id . '/' . $product_slug); ?>">View Product Details</a> 
					</div>     
		        	<div class="ranta-figure">
			        	<img class="product-image" src="<?php echo $product_image; ?>"/><br/>
				        <h3 class="title" style="font-size:14px;font-weight:bold;background-color:#fd0937;color:#ffffff;padding:10px;"><?php echo $p->name; ?></h3>
				        <span class="product-price">Rental Price : <?php echo $this->Number->currency($p->rental_price, "MYR"); ?></span>
				        <div class="pos_rel">
                            <div class="rateYo" id="product-rating-<?php echo $p->id; ?>"></div>   
                            <div class="counter" id="counter-rating-<?php echo $p->id; ?>"></div>                              
                        </div>
                        <br />				        
				        <hr style="margin-top:5px;margin-bottom:5px;" />
				        <p class="product-short-description"><?php echo $excerpt; ?></p>						        
				    </div>				    
		        </div> 		             		        			        				        
		    </li>
		<?php } ?>
		</ul>
		</div>
		<div class="clearfix"></div>
		<div class="paginator" style="text-align:center;margin-top:80px;">
	        <ul class="pagination">
	        <?= $this->Paginator->prev('«') ?>
	            <?= $this->Paginator->numbers() ?>
	            <?= $this->Paginator->next('»') ?>
	        </ul>	        
	    </div>    
	<?php }else{ ?>
		<br />
		<div class="col-md-12 alert alert-danger alert-dismissible"><i class="fa fa-ban"></i> No Records found!</div>
	<?php } ?>
</div>
