
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(<?php echo base_url('assets/images/cover-img-1.jpg') ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Products</h1>
				   					<h2 class="bread"><span><a href="<?php echo base_url('index/index') ?>">Home</a></span> <span>Shop</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-push-2">

						<div class="row row-pb-lg">
							
							
							
							<?php foreach($produse as $produs): ?>
								<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(<?php echo base_url('uploads/product-images/').$produs->thumbnail; ?>)">
										<p class="tag"><span class="new">New</span></p>
										<div class="cart">
											<p>
												<span class="addtocart"><a href="<?php echo base_url('productscontroller/addToCart/').$produs->id_produs ?>"><i class="icon-shopping-cart"></i></a></span> 
												<span><a href="<?php echo base_url('productscontroller/product_detail').$produs->id_produs ?>"><i class="icon-eye"></i></a></span>  
												<span><a href="<?php echo base_url("index/addToWishlist/".$produs->id_produs) ?>"><i class="icon-heart3"></i></a></span>
												
											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="<?php echo base_url("produs/").$produs->id_produs ?>"><?php echo $produs->nume ?></a></h3>
										<p class="price"><span><?php echo $produs->pret; ?> RON</span></p>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							

						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="pagination-custom">
									<?php echo $links; ?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>



		