<?= $this->element('Front/header'); ?>
<?= $this->element('Front/top_nav'); ?>
<?= $this->fetch('content'); ?>



<div class="cake-section-wrap">
	<section class="cake-element">
		<div class="cake-element-container search-bar-form">
			<nav class="navbar navbar-light bg-light">
			  <form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
			</nav>			
		</div>
		<div class="spacer-margin"></div>
		<div class="cake-element-container">
			<div class="listing-container list-layout">
				<div class="listing-item">
					<a href="#" class="listing-img-container"><img src="/sample.jpg" alt="THIS IS AN IMAGE">
				
					<div class="listing-badges">
						<span class="featured">Featured</span>			
						<span class="property-badge property-badge-sale">For Sale</span>
					</div>

					<div class="listing-img-content">
						<span class="listing-price">PRICE</span>
						<span class="save favorite-icon">Favorite</span>
					</div>
								
					<div class="img-biz img-biznez-container">
						<div>
							<img src="/sample-source.jpg" alt="THIS IS THE FEATURED IMAGE" width="520" height="397" class="cake-img-attachement">
						</div>
					</div>

					</a>


				
				<div class="listing-content">
					<div class="listing-title">
						<h4>BUSINESS TITLE</h4>
						<div class="listing-address">
							 Melbourne, VIC 3000, AU
						</div>
					</div>
					
			        <div class="business-main-features">
			        	<p>NOTE- This business is located in Bali- Indonesia. I am fortunate to be entrusted to sell this magnificent resort in Amlapura Bali Indonesia. Bukit Asri Lodge is a holiday Resort- Yoga retreat, in magnificent surrounds void of all of the traffic and noise of many of the main tourist attractions in Bali- Indonesia...THIS AREA OF TEXT NEEDS TO BE EXCERPT</p>
			        	<a href="#">
			        		<img src="brokersLogo.jpg" alt="THIS WILL YOU PUT THE BROKERS LOGO" height="auto" width="100%">
			        	</a>
			        </div>
				</div>	

				</div>
			</div>			
		</div>
	</section>
</div>




<?= $this->element('Front/footer'); ?>