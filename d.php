<?php
session_start();
include("include/dbconnect.php");
$rdate=date("d-m-Y");
?>
<!DOCTYPE html>
<html>
<head>
<title><?php include("include/title.php");?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Catchy Carz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
<!--/banner-section-->
	<div id="demo-1" data-zs-src='["images/1/Train-Meal1.jpg", "images/1/Train-Meal.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		   <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				        <div id="sidebar"> 
						     <h4 class="menu">Menu</h4>
						          <ul>
							    <li><a href="upcoming.html">New Cars <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
							      <ul>
									  <li><a href="find.html"><span>Find New Cars</span></a></li>
									  <li><a href="upcoming.html"><span>Upcoming Cars</span></a></li>
									  <li><a href="recommend.html"><span>Recommend Me A Car</span></a></li>
									  <li><a href="upcoming.html"><span>New Launches</span></a></li>
									  <li><a href="dealer.html"><span>Locate Dealer</span></a></li>
									  <li class="last"><a href="price.html"><span>On Road Price</span></a></li>
								   </ul>
							   </li>
							    <li><a href="compare.html">Compare Cars</a></li>
							    <li><a href="cars.html">Used Cars <i class="glyphicon glyphicon-triangle-bottom"> </i></a>
							      <ul>
								  <li><a href="used.html">Find Used cars</a></li>
									 <li><a href="sell.html">Sell Your Car</a></li>
									 <li><a href="cars.html"><span>Search Used Cars</span></a></li>
									 <li class="last"><a href="valuation.html"><span>Used Car Valuation</span></a></li>
									 <li><a href="dealer.html"><span>Locate Dealer</span></a></li>
									
								  </ul>
							   </li>
							   <li><a href="sell.html">Sell Your Car</a></li>
							   <li><a href="news.html">News And Reviews</a></li>
							   <li><a href="dealer.html">Dealers And Services</a></li>
							   <li><a href="#">More <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
							      <ul>
									  <li><a href="loan.html"><span>Car Loan</span></a></li>
									  <li><a href="codes.html"><span>Short Codes</span></a></li>
									  <li><a href="accessories.html"><span>Car Accessories</span></a></li>
									  <li><a href="tips.html"><span>Tips and Advices</span></a></li>
									  <li class="last"><a href="help.html"><span>Privacy Policy</span></a></li>

								 </ul>
							   </li>
							   <li><a href="insurance.html">Insurance</a></li>
							 <li><a href="app.html">Catchy Carz app</a><li>
						   </ul>
						   <div id="sidebar-btn">
							   <span></span>
							   <span></span>
							   <span></span>
						   </div>
					   </div>

							 <script>
								  var sidebarbtn = document.getElementById('sidebar-btn');
									var sidebar = document.getElementById('sidebar');
								   sidebarbtn.addEventListener('click', function () {
								  if(sidebar.classList.contains('visible')){
										sidebar.classList.remove('visible'); 
								   }else {
										sidebar.className = 'visible';
									}
								  });
								</script>
					    <!-- //sidebar -->
					  <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-tag"></span> Discounts On New Cars » </a></div>
					  <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></div>
					  <li><button id="showRight" style="color: #fff" class="navig">Login </button>
							 <div class="cbp-spmenu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
								<h3>Login</h3>
							<div class="login-inner">
								<div class="login-top">
								 <form action="#" method="post">
									<input type="text" name="email" class="email" placeholder="Email" required=""/>
									<input type="password" name="password" class="password" placeholder="Password" required=""/>	
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Remember me</label>
								</form>
								<div class="login-bottom">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>
											<form action="#" method="post">
												<input type="submit" value="LOGIN"/>
											</form>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
													
							</div>
							<br><br><br>
							<div class="social-icons">
							<ul> 
								<li class="twt"><a href="#"><span class=""></span><span class="text"></span></a></li>
								<li class="twt"><a href="#"><span class=""></span><span class="text"></span></a></li>
							</ul> 
						</div>		
							</div> 
							</nav>
						</div> 
				<script src="js/classie2.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRight = document.getElementById( 'showRight' ),
								body = document.body;
				
							showRight.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRight' );
							};
				
							function disableOther( button ) {
								if( button !== 'showRight' ) {
									classie.toggle( showRight, 'disabled' );
								}
							}
						</script>
						<!--Navigation from Right To Left-->
						    </li>
					</div>
				  <!-- //header-left -->
		             <div class="search-box">

						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
					    <ul>
						<li>
							<button id="showRight" class="btn btn-success">Admin </button>
							 <div class="cbp-spmenu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
								<h3>Admin Login</h3>
							<div class="login-inner">
								<div class="login-top">
								 <form action="" method="post">
								    <input type="text" name="username" class="name active" placeholder="Username" required="">
									<input type="password" name="password" class="password" placeholder="Password" required=""/>	
									<label for="brand"><span></span></label>
								<div class="login-bottom">
									<ul>
										<li>
										</li>
										<li>
											
												<input type="submit" name="btn" value="LOGIN"/>
										</li>
										</form>

										<li><p style="color:red"><?php echo $msg;?></p>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
													
							</div>
							<br><br><br>
							<div class="social-icons">
							<ul> 
								<li class="twt"><a href="#"><span class=""></span><span class="text"></span></a></li>
								<li class="twt"><a href="#"><span class=""></span><span class="text"></span></a></li>
							</ul> 
						</div>		
							</div> 
							</nav>
						</div> 
				<script src="js/classie2.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRight = document.getElementById( 'showRight' ),
								body = document.body;
				
							showRight.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRight' );
							};
				
							function disableOther( button ) {
								if( button !== 'showRight' ) {
									classie.toggle( showRight, 'disabled' );
								}
							}
						</script>
						<!--Navigation from Right To Left-->
						    </li>
								
							
							<li>
							<button id="showRight1" class="btn btn-success">Admin </button>
							 <div class="cbp-spmenu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s22">
								<h3>Admin Login</h3>
							<div class="login-inner">
								<div class="login-top">
								 <form action="" method="post">
								    <input type="text" name="username" class="name active" placeholder="Username" required="">
									<input type="password" name="password" class="password" placeholder="Password" required=""/>	
									<label for="brand"><span></span></label>
								<div class="login-bottom">
									<ul>
										<li>
										</li>
										<li>
											
												<input type="submit" name="btn" value="LOGIN"/>
										</li>
										</form>

										<li><p style="color:red"><?php echo $msg;?></p>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
													
							</div>
							<br><br><br>
							<div class="social-icons">
							<ul> 
								<li class="twt"><a href="#"><span class=""></span><span class="text"></span></a></li>
								<li class="twt"><a href="#"><span class=""></span><span class="text"></span></a></li>
							</ul> 
						</div>		
							</div> 
							</nav>
						</div> 
				<script src="js/classie2.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s22' ),
								showRight = document.getElementById( 'showRight1' ),
								body = document.body;
				
							showRight.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRight1' );
							};
				
							function disableOther( button ) {
								if( button !== 'showRight1' ) {
									classie.toggle( showRight1, 'disabled' );
								}
							}
						</script>
						<!--Navigation from Right To Left-->
						    </li>
								
						   </li>
			
							
						</ul>
						
					</div>
				
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index.php">Railway <span class="logo-sub">Food</span> Booking</a></h1>
				<p>Eat it – try it – buy it!</p>
			       
			</div>
		</div>
</div>
<?php
extract($_REQUEST);
if(isset($btn))
	{
		$q1=mysqli_query($connect,"select * from tbl_admin where username='$username' && password='$password' ");
			$n1=mysqli_num_rows($q1);
				if($n1==1)
				{
				$_SESSION['username']=$username;
                ?>
                <script language="javascript">
                    alert("Logged In");
                    window.location.href="admin.php";
                </script>
                <?php
				}
				else
				{
				$msg="Invalid Username or Password!";
				}
	}
?>
<!-- discounts-->
			<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog about" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount">
									<h3>Get Offers & Discount of</h3>
									<p>Catchy Carz Brand VL in New York</p>
										<form action="#" method="post">
											<select id="country5" onchange="change_country(this.value)" class="frm-field required">
												<option selected="selected" value="-1">-Buying Time Period-</option>
												<option value="0">Just Researching</option>
												<option value="7">1 Week</option>
												<option value="14">2 Weeks</option>
												<option value="30">1 Month</option>
												<option value="60">2 Months</option>
											</select>
											<input type="text" name="pin code" class="Pin code" placeholder="Pin code" required="">
										</form>
								</div>							
						</div>
						 <div class="modal-body about">
								
								<div class="dis-contact">
								  <h4>Contact Information</h4>
												<form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required="">
													<input type="text" name="email" class="email" placeholder="Email" required="">
													<input type="text" name="phone" class="phone" placeholder="Phone" required="">
													<div class="d-c">	
														<span class="checkbox1">
															<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I agree to Terms and Conditions.</label>
														</span>													

													</div>
													<input type="submit" value="Find Offers">
													
													</form>
								</div>
						 </div>
					</div>
				</div>
			</div>
			<!-- //discounts-->
				<!-- //sign-up-->
				<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Sign Up</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
								 <form action="#" method="post">
									<input type="text" name="name" class="name active" placeholder="Your Name" required="">
									<input type="text" name="email "class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">		
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me?</label>
									<div class="login-bottom one">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>
										
										  <input type="submit" value="SIGN UP">
										
										</li>
									<div class="clearfix"></div>
								</ul>
								</div>	
								</form>
								
							</div>
							
							
						 </div>
						 <br><br><br>
							<div class="social-icons">
							<ul> 
								<li class="twt"><a href="#"><span class=""></span><span class="text"></span></a></li>
								<li class="twt"><a href="#"><span class=""></span><span class="text"></span></a></li>
							</ul> 
									</div>
								
					</div>
				</div>
			</div>

	<!-- /bottom-banner -->
    <div class="select-cars-agile">
	   <div class="container">
	         <div class="grid cars-main">
			  <div class="col-md-7 slide-show-w3l">
			     <!--//screen-gallery-->
				 <h3 class="tittle top">NEW CARS</h3>
				 <h6 class="sub">Great Prices. Great Vehicles. Great Service.</h6>
							<div class="car-view-slider">
					          <ul id="flexiselDemo">
							 <li>
								 <a href="upcoming.html"><img src="images/n2.jpg" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.html">Ford Mustang GT 500</a></h3>
										<span>Catchy Carz</span>
										
									</div>
								 </a>
								
							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n1.jpeg" alt=""/>
								 <div class="caption">
										<h3><a href="upcoming.html">Acura TLX</a></h3>
										<span>Catchy Carz</span>
										
									</div>
								 </a>
							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n3.jpg" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.html"> McLaren MP4-12c</a></h3>
										<span>Catchy Carz</span>
										
									</div>
								 </a>
							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n4.jpg" alt=""/>
									<div class="caption">
										<h3><a href="upcoming.html">BMW Z4</a></h3>
									<span>Catchy Carz</span>
										
									</div>
								 </a>
							 </li>
							</ul>
						</div>
						<!--//screen-gallery-->

					</div>
					<div class="col-md-5 new-car-used">
					  <h3 class="tittle top">USED CARS</h3>
					  <h6 class="sub">Used Cars at Shocking Prices.</h6>
					  <div class="used-one">
					     <figure class="effect-zoe">
							 <a href="used.html"><img src="images/used_car.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>CATCHY <span>CARZ</span></h4>
								<p class="icon-links">
									<a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
									<a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
									<a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
								</p>
							<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</figcaption>			
						</figure>
					  </div>
					  <div class="clearfix"> </div>
					   <div class="used-one second">
					     <figure class="effect-zoe">
							<a href="used.html"><img src="images/used_car1.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>CATCHY <span>CARZ</span></h4>
								<p class="icon-links">
									<a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
									<a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
									<a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
								</p>
							<p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</figcaption>			
						</figure>
					  </div>
					</div>
					<div class="clearfix"> </div>
				</div>
	   </div>
	</div>
	<div class="banner-bottom">
	   <div class="container">
          <div class="bottom-form">
			<div class="inner-text">
				
			 <form action="#" method="post">
				<h3>Choose Your Best Car</h3>
					<div class="best-hot">
						<h5>Name</h5>
						<input type="text" class="name active" placeholder="Name" required="">
					</div>
					<div class="best-hot">
						<h5>Email</h5>
						<input type="text" class="email" placeholder="Email" required="">
					</div>
					<div class="section_drop2">
					<h5>City</h5>
						<select id="country6" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
														<option value="city">Amsterdam</option>
														<option value="city">Bahrain</option>
														<option value="city">Cannes</option>
														<option value="city">Dublin</option>
														<option value="city">Edinburgh</option>
														<option value="city">Florence</option>
														<option value="city">Georgia</option>
														<option value="city">Hungary</option>
														<option value="city">Hong Kong</option>
														<option value="city">Johannesburg</option>
														<option value="city">Kiev</option>
														<option value="city">London</option>
														<option value="city">Others...</option>
													</select>
												   </div>
					<input type="submit" value="Book Now">
				</form>
			</div>
		</div>
	</div>
</div>

		<div class="clearfix"></div>
		<?php include("include/footer.php");?>