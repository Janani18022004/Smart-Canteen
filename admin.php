<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$username=$_SESSION['username'];
$msg="";
$rdate=date("d-m-Y");
if(isset($btn))
{
	
$uploadDir = "uploads/";
$file = $uploadDir . uniqid() . "_" . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
    echo "";
} else {
    echo "";
}
$q1=mysqli_query($connect,"select * from tbl_hotel where hname='$hname' || username='$username'");
	 $n1=mysqli_num_rows($q1);
	 if($n1==0)
	 {
    $mq=mysqli_query($connect,"select max(id) from tbl_hotel");
	$mr=mysqli_fetch_array($mq);
	$id=$mr['max(id)']+1;
 $ins=mysqli_query($connect,"insert into tbl_hotel(id,hname,mobile1,email,station,mobile2,address,city,username,password,file,status,rdate) values($id,'$hname','$mobile1','$email','$station','$mobile2','$address','$city','$username','$password','$file','','$rdate')");
			if($ins)
			{
		 ?>
	<script language="javascript">
		alert("Canteen Added");
		window.location.href="admin.php";
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

<?php include("include/adminlink.php");?>

		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="admin.php">Home</a> <i>|</i></li>
							<li>Canteen</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Canteen</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">CANTEEN</h3>
			    <!--/locate -->
					<div class="locate">
					    <div class="locate_grids">
								
                            <div class="modal-body about">
								
								<div class="dis-contact">
                                <h4>Add Canteen Information</h4>
                                <br>
                                <p style="color:red"><?php echo $msg;?></p>

												<form action="" method="post" enctype="multipart/form-data">
													<input type="text" name="hname" class="name active" placeholder="Canteen Name" required="">
													<input type="text" name="mobile1" class="email" placeholder="Canteen Contact Person Mobile No." required="">
													<input type="text" name="email" class="phone" placeholder="Canteen Email" required=""><br><br>
													<input type="text" name="station" class="phone" placeholder="How many Colleges is your Canteen" required="">
													<input type="text" name="mobile2" class="phone" placeholder="Canteen Mobile" required="">
													<input type="text" name="address" class="phone" placeholder="Canteen Address" required=""><br><br>
													<input type="text" name="city" class="phone" placeholder="Canteen City" required="">
													<input type="text" name="username" class="phone" placeholder="Username" required="">
													<input type="text" name="password" class="phone" placeholder="Password" required=""><br><br>
													<input type="file" name="file" class="phone" placeholder="Password" required=""><br><br>


													<div class="d-c">	
														<span class="checkbox1">
														</span>													

													</div>
                                                    <input type="submit" name="btn" value="ADD">
													
													</form>
								</div>
						   </div>
						</div>
				</div>
				  <!--//locate -->
				  <!--/browse -->
				     <div class="browse-section w3-agile">
					      <h3 class="tittle">BROWSE CANTEEN</h3>
						<div class="browse-inner">
								<ul class="dealers-list one">
                                    <?php
                                    $q11=mysqli_query($connect,"select * from tbl_hotel");
                                    while($mr1=mysqli_fetch_array($q11)){

                                    



                                    ?>
										<li><a href="hotelinfo.php?id=<?php echo $mr1['id'];?>"><?php echo $mr1['hname'];?></a></li>
										<?php
                                    }
                                    ?>
								</ul>

								

								<div class="clearfix"> </div>
						</div>
					</div>
				  <!--//browse -->
			</div>
		</div>
<?php include("include/footer.php");?>