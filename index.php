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
	<div id="demo-1" data-zs-src='["images/1/indigo-restaurant.jpg", "images/1/indigo-restaurant.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		   <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				        <div id="sidebar"> 
						     <h4 class="menu">Menu</h4>
						         
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
					  <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></div>
					  <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal3"> Login</a></div>
							 <div class="cbp-spmenu-push">
							
						</div> 
				
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
						<a href="#" data-toggle="modal" data-target="#myModal4"> Canteen</a>

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
			  <h1><a href="index.php">Efficiently Improving The Canteen Experience By smart Campus Solution <span class="logo-sub"></span> </a></h1>
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
		
				<!-- //sign-up-->
				<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Student Sign Up</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
								 <form action="" method="post">
									<input type="text" name="name" class="name active" placeholder="Your Name" required="">
									<input type="text" name="email" class="email" placeholder="Your Email" required="">
									<input type="text" name="mobile" class="email" placeholder="Your Mobile" required="">
									<input type="text" name="username" class="name active" placeholder="Your Username" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">		
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me?</label>
									<div class="login-bottom one">
									<ul>
										<!-- <li>
											<a href="#">Forgot password?</a>
										</li> -->
										<li>
										
										  <input type="submit" name="cusregister" btn="cusregister" value="SIGN UP">
										
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
			<?php
extract($_REQUEST);
$msg="";
if(isset($cusregister))
{
	 $q1=mysqli_query($connect,"select * from tbl_user where email='$email' || username='$username'");
	 $n1=mysqli_num_rows($q1);
	 if($n1==0)
	 {
	$mq=mysqli_query($connect,"select max(id) from tbl_user");
	$mr=mysqli_fetch_array($mq);
	$id=$mr['max(id)']+1;
/*     $coaches1 = implode(",", $coaches);
 */



	
	
		
    $ins=mysqli_query($connect,"insert into tbl_user(id,name,email,mobile,username,password,rdate) values($id,'$name','$email','$mobile','$username','$password','$rdate')");
			if($ins)
			{
		 ?>
	<script language="javascript">
		alert("<?php echo $name;?>,Your details has Registered!..");
		window.location.href="index.php";
		 </script>
		 <?php
			}
	}
	else
	{
	$msg="Already Exist!";
	}
}
?>

			<div class="modal ab fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Student Login</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
								 <form action="" method="post">
									<input type="text" name="username" class="name active" placeholder="Your Username" required="">
									<input type="password" name="password" class="password" placeholder="Your Password" required="">		
									
									<div class="login-bottom one">
									<ul>
										<li>
										</li>
										<li>
										
										  <input type="submit" name="cuslogin1" value="SIGN IN">
										
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

			<?php
extract($_REQUEST);
if(isset($cuslogin1))
	{
		$q1=mysqli_query($connect,"select * from tbl_user where username='$username' && password='$password' ");
			$n1=mysqli_num_rows($q1);
				if($n1==1)
				{
				$_SESSION['username']=$username;
                ?>
                <script language="javascript">
                    alert("Logged In");
                    window.location.href="user.php";
                </script>
                <?php
				}
				else
				{
				$msg="Invalid Username or Password!";
				}
	}
?>
		
			<div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Canteen Login</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
								 <form action="#" method="post">
									<input type="text" name="username" class="name active" placeholder="Your Username" required="">
									<input type="password" name="password" class="password" placeholder="Your Password" required="">		
									
									<div class="login-bottom one">
									<ul>
										<li>
										</li>
										<li>
										
										  <input type="submit" name="cuslogin" value="SIGN IN">
										
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
			<?php
extract($_REQUEST);
if(isset($cuslogin))
	{
		$q1=mysqli_query($connect,"select * from tbl_hotel where username='$username' && password='$password' ");
			$n1=mysqli_num_rows($q1);
				if($n1==1)
				{
				$_SESSION['username']=$username;
                ?>
                <script language="javascript">
                    alert("Logged In");
                    window.location.href="hotel.php";
                </script>
                <?php
				}
				else
				{
				$msg="Invalid Username or Password!";
				}
	}
?>

	<!-- /bottom-banner -->
	<div class="select-cars-agile">
    <div class="container">
        <div class="grid cars-main">
            <div class="col-md-7 slide-show-w3l">
                <!--//screen-gallery-->
                <h3 class="tittle top">Canteen</h3>
                <h6 class="sub">Great Prices. Nice Foods. Nice Service.</h6>
                <div class="car-view-slider">
                    <ul id="flexiselDemo">
                        <?php
                        $q3 = mysqli_query($connect, "select * from tbl_hotel");
                        while ($mrr = mysqli_fetch_array($q3)) {
                            ?>
                            <li>
                                <a href=""><img src="<?php echo $mrr['file']; ?>" alt=""/>
                                    <div class="caption">
                                        <h3><a href=""><?php echo $mrr['hname']; ?></a></h3>
                                        <span><?php echo $mrr['station']; ?></span>
                                    </div>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <!--//screen-gallery-->
            </div>
            <div class="col-md-5 new-car-used">
                <h3 class="tittle top">Foods</h3>
                <h6 class="sub">Delivering Foods at Reasonable Prices.</h6>
                <?php
                $q3 = mysqli_query($connect, "select * from tbl_hotelfood");
                while ($mrr = mysqli_fetch_array($q3)) {
                    ?>
                    <div class="used-one">
                        <figure class="effect-zoe">
                            <a href=""><img src="<?php echo $mrr['file']; ?>" alt="Used Car"></a>
                            <figcaption>
                                <h4><?php echo $mrr['fname']; ?><br>
                                    <span>RS.<?php echo $mrr['price']; ?></span></h4><br>
                                <p class="icon-links">
                                    <a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
                                    <a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
                                </p>
                                <p class="description"></p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
</div>
	   </div>
	</div>

		<?php include("include/footer.php");?>