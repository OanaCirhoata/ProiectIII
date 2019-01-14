		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(<?php echo base_url('assets/images/cover-img-1.jpg') ?>) ;">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Product Detail</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="shop.html">Product</a></span> <span>Product Detail</span></h2>
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
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
										<div class="product-img" style="background-image: url(<?php echo base_url('uploads/product-images/').$produs['thumbnail'] ?>);">
											<p class="tag"><span class="sale">Sale</span></p>
										</div>
										<div class="thumb-nail">
											<?php foreach($imagini as $imagine): ?>
											<a href="#" class="thumb-img" style="background-image: url(<?php echo base_url('uploads/product-images/').$imagine->nume ?>);"></a>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
								<input type="hidden" name="id_produs" id="id_produs" value="<?php echo $produs['id_produs']; ?>">
								<div class="col-md-7">
									<div class="desc">
										<h3><?php echo $produs["nume"]; ?></h3>
										<p class="price">
											<span><?php echo $produs['pret'] ?> RON</span> 
											<span class="rate text-right">
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-half"></i>
												(74 Rating)
											</span>
										</p>
										<p><?php echo $produs['descriere']; ?></p>
										<div class="size-wrap">
											<p class="size-desc">
												Size: 
												<div class="form-group col-md-4"><br>
													<select name="marime" class="form-control form-control input-number" id="marime" style="border:1px solid #e8e8e8!important;">
														<?php foreach($marimi as $marime): ?>
														<option value="<?php echo $marime->id_marime ?>"><?php echo $marime->nume ?></option>
														<?php endforeach; ?>
													</select>
												</div>
												
											</p>
										</div>
										<div class="row row-pb-sm">
											<div class="col-md-4">
                                    <div class="input-group">
                                    	<span class="input-group-btn">
                                   		</span>
                                    	<input type="number" id="quantity" name="qty" class="form-control" value="1" style="border: 1px solid #e8e8e8!important;">
                                    	<span class="input-group-btn">
                                    	</span>
                                 	</div>
                        			</div>
										</div>
										<p><a class="btn btn-primary btn-addtocart" ><i class="icon-shopping-cart"></i> Add to Cart</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Similar Products</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(<?php echo base_url('assets/images/item-5.jpg')?>);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(<?php echo base_url('assets/images/item-6.jpg')?>);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(<?php echo base_url('assets/images/item-7.jpg')?>);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(<?php echo base_url('assets/images/item-8.jpg') ?>);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>