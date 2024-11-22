<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$username=$_SESSION['username'];
$msg="";
$rdate=date("d-m-Y");
$query=mysqli_query($connect,"select * from tbl_food_booking where id='$fid'");
$result=mysqli_fetch_array($query);
$hotelname=$result['hotelname'];

if(isset($btn))
{
	


    $mq=mysqli_query($connect,"select max(id) from tbl_feedback");
	$mr=mysqli_fetch_array($mq);
	$id=$mr['max(id)']+1;
 $ins=mysqli_query($connect,"insert into tbl_feedback(id,customer,fid,hotelname,foodname,feed,rdate) values($id,'$username','$fid','$hotelname','$fname','$feed','$rdate')");
			if($ins)
			{
		 ?>
	<script language="javascript">
		alert("Feedback Added");
		window.location.href="feedback.php";
		 </script>
		 <?php
			}
	
	else
	{
	$msg="Already Exist!";
	} 
}


?>

<?php include("include/hotellink.php");?>

		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="user.php">Home</a> <i>|</i></li>
							<li>Feedback</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Feedback</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">FEEDBACK</h3>

					
			</div>
		</div>
        
        <div class="banner-bottom">

                    <div class="container">
                        <div class="bottom-form">
                            <div class="inner-text">
                                
                            <form action="" method="post">
                                <h3>Write Your Feedback</h3><br>
                                <p style="color:red"><?php echo $msg;?></p>
                                    <div class="best-hot">
                                        <h5>Food Name</h5>
                                        <input type="text" class="" name="fname" value="<?php echo $fname;?>" readonly placeholder="Name" required="">
                                    </div>

                                    
                                    <div class="best-hot">
                                        <h5>Feedback</h5>
                                        <textarea name="feed" id="" cols="31" rows="5"></textarea>
                                    </div>
                                    
                                    <br>
                                    <input type="submit" name="btn" value="Add">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br><br>
       
            <br>
            <br>

                
<?php include("include/footer.php");?>