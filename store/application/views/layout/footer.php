	
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Store</h4>
						<p>...</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-2">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@store.com</a></li>
							<li><a href="#">store.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</footer>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url('assets/js/jquery.flexslider-min.js') ?>"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/magnific-popup-options.js') ?>"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url('assets/js/jquery.stellar.min.js') ?>"></script>
	<!-- Main -->
	<script src="<?php echo base_url('assets/js/main.js') ?>"></script>



	<script type="text/javascript">

function ajax_fetch_products(id_category=null,min_price=null,max_price=null,size=null){
	if(id_category===null){
		console.log('NULL cat id');
	} else{
		console.log('Cat id: '+id_category);
	}
	$.ajax({
                   	type:"ajax",
                    url: "<?php echo base_url(); ?>productscontroller/ajax_load_products_for_category",
                    method:"POST",
                    dataType: "json",
                    data:{
                      id_category:id_category,
                      pret_minim:min_price,
                      pret_maxim:max_price,
                      id_marime:size
                    },
                    success:function(response)
                    {
                        $('#products_container').html(response);
                    },
                    error: function() 
                    {
                        alert("Error!");
                    }
                });
}


		let id_category = null;
		let min_price = null;
		let max_price = null;
		let size=null;

	$(document).ready(function(){
		
		$('.product_category').on('click', function(){
			id_category = $(this).attr('id');
			ajax_fetch_products(id_category,min_price,max_price,size);
		});	
		$('#min_price').on('change', function(){
			min_price = $('#min_price').val();
			ajax_fetch_products(id_category,min_price,max_price,size);
		});	
		$('#max_price').on('change', function(){
			max_price = $('#max_price').val();
			ajax_fetch_products(id_category,min_price,max_price,size);
		});	
		$('.size').on('click', function(){
			size = $(this).attr('id');
			ajax_fetch_products(id_category,min_price,max_price,size);
		});	

		// ajax_fetch_products();
	});



</script>	



<script type="text/javascript">
	function ajax_addtocart(){
			let id_produs = $('#id_produs').val();
			let marime = $('#marime').val();
			let cantitate = $('#quantity').val();

			// console.log(id_produs);
			// console.log(marime);
			// console.log(cantitate);


			$.ajax({
				type:"ajax",
                    url: "<?php echo base_url(); ?>productscontroller/addToCart",
                    method:"POST",
                    dataType: "json",
                    data:{
                      id_produs:id_produs,
                      marime:marime,
                      cantitate:cantitate
                    },
                    success:function(response)
                    {
                     	window.location.reload();
                    },
                    error: function() 
                    {
                        window.location.reload();
                    }
			});
	}
</script>

	</body>
</html>