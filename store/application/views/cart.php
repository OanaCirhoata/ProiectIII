<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
/* Update item quantity */
function updateCartItem(obj, rowid){
	$.get(
        "<?php echo base_url('cart/updateItemQty/'); ?>", 
        {
            rowid:rowid, 
            qty:obj.value
        }, 
        function(resp){
		  if(resp == 'ok'){
			location.reload();
		  }else{
			alert('Cart update failed, please try again.');
		}
	});
}
</script>

		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(<?php echo base_url('assets/images/cover-img-1.jpg') ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Shopping Cart</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="shop.html">Product</a></span> <span>Shopping Cart</span></h2>
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
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center">
								<span>Remove</span>
							</div>
						</div>
						<?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
							<div class="product-cart">
								<div class="one-forth">
									<div class="product-img" style="background-image: url(<?php echo base_url('uploads/product-images/').$item["image"] ?>);">
									</div>
									<div class="display-tc">
										<h3><?php echo $item["name"]; ?></h3>
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<span class="price"><?php echo $item["price"]; ?></span>
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<input type="number" id="quantity" name="quantity" class="form-control input-number text-center" value="<?php echo $item['qty'] ?>"  onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')">
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<span class="price"><?php echo ($item['price']*$item['qty'])." RON" ?></span>
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<a href="<?php echo base_url('cart/removeItem/'.$item["rowid"]); ?>" class="closed"></a>
									</div>
								</div>
							</div>
						<?php } ?>
						<?php } else{ ?>
                                        <tr><td colspan="6"><p>Your cart is empty.....</p></td>
                                    <?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">
									
								</div>
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span><?php echo $this->cart->total()." RON" ?></span></p>
											<p><span>Delivery:</span> 
												<?php if($this->cart->total() > 199){ $shipping = 0; ?>
		                                            <td colspan="2">Free Shipping</td>
		                                        <?php } else{ $shipping = 20; ?>
		                                            <td colspan="2">20 RON</td>
		                                        <?php } ?>  
											</p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span><?php echo ($this->cart->total()+$shipping)." RON" ?></span></p>
										</div>
									</div>

									<div class="row">
									<div class="col-md-12">
										<p><a href="#" style= "margin-top:20px; border-radius: 20px;" class="btn btn-primary">To checkout</a></p>
									</div>
								</div>
								</div>
								
								
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
						<h2><span>Recommended Products</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(<?php echo base_url('assets/images/item-5.jpg') ?>);">
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
							<div class="product-img" style="background-image: url(<?php echo base_url('assets/images/item-8.jpg')?>);">
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