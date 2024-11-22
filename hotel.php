<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$username=$_SESSION['username'];
$msg="";
$rdate=date("d-m-Y");
$q1=mysqli_query($connect,"select * from tbl_hotel where username='$username'");
$mr=mysqli_fetch_array($q1);


?>

<?php include("include/hotellink.php");?>

		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="hotel.php">Home</a> <i>|</i></li>
							<li>Canteen Information</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Canteen Information</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">CANTEEN INFORMATION</h3>
			    <!--/locate -->
                <div class="tips w3l">
				<div class="container">
				 <div class="col-md-9 tips-info">
					 <div class="news-grid">
					    <div class="news-img up">
						  <a href=""> <img src="<?php echo $mr['file'];?>" alt=" " class="img-responsive"></a>
						</div>
					    <div class="news-text coming">
						    <h3><a href=""><?php echo $mr['hname'];?></a></h3>
							<h5>Registered On: <?php echo $mr['rdate'];?></h5>
							<p class="news">Avaliable Colleges:  <?php echo $mr['station'];?></p>
							<h6>Contact-<a href=""> <?php echo $mr['mobile2'];?></a></h6>
							<h6>Email-<a href=""> <?php echo $mr['email'];?></a></h6>
							<ul class="p-t">
							  
							</ul>
					
						</div>
		
						<div class="clearfix"></div>
					 </div>	
					  
					 
								
				</div>	
			    <div class="col-md-3 advice-right w3-agile">
					<div class="blo-top">
						<div class="tech-btm one">
						<img src="<?php echo $mr['file'];?>" class="img-responsive" alt="">
						</div>
					</div>
					
								<div class="clearfix"> </div>
						
								<div class="blo-top1">
								<div class="agileits_twitter_posts">
									<h4>Feedback</h4>
									<?php
									
									$q111 = mysqli_query($connect, "SELECT * FROM tbl_feedback WHERE hotelname = '" . $mr['username'] . "'");
									?>
									<ul>
										<?php
										$k = 1;

										while ($mr1 = mysqli_fetch_array($q111)) {
										?>
											<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $mr1['rdate']; ?><br>
											<i class="fa fa-user" aria-hidden="true"></i> <?php echo $mr1['customer']; ?><br>
											<i class="fas fa-comments"></i> <?php echo $mr1['feed']; ?>
										    </li>

													
										<?php
											$k++;
										}
										?>
									</ul>
								</div>
							</div>


					<div class="clearfix"> </div>
			</div>
		</div>

			</div>
		</div>
<?php include("include/footer.php");?>