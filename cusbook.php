<?php
session_start();
include("include/dbconnect.php");
$username=$_SESSION['username'];
extract($_REQUEST);
$msg="";
$rdate=date("d-m-Y");
$query = mysqli_query($connect, "SELECT * FROM tbl_hotelfood WHERE id='$id' AND hotelname='$hotelname'");
$r11 = mysqli_fetch_array($query);

if(isset($btn))
{
	

    $mq=mysqli_query($connect,"select max(id) from tbl_food_booking");
	$mr=mysqli_fetch_array($mq);
	$id=$mr['max(id)']+1;
    $price=$r11['price'];
    $price1=$price * $qty;
 $ins=mysqli_query($connect,"insert into tbl_food_booking(id,customer,hotelname,fname,qty,price,status,rdate,tno,station,comp,seatno) values($id,'$username','$hotelname','$fname','$qty','$price1','0','$rdate','$tno','$station','$comp','$seatno')");
			if($ins)
			{
		 ?>
	<script language="javascript">
		alert("Food Booked");
		window.location.href="user.php";
		 </script>
		 <?php
			}
	
	else
	{
	$msg="Already Exist!";
	} 
}

?>



<?php include("include/customerlink.php");?>

		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="user.php">Home</a> <i>|</i></li>
							<li>Booking</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Booking</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
            
		<!--//breadcrumb-->
		   <!--/sell-car -->
           <div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">BOOKING A FOOD</h3>

					
			</div>
		</div>
          
            <div class="ab">
    <div class="modal-dialog sign">
        <div class="modal-content about">
            <div class="modal-header one">
                <div class="discount one">
                    <h3>Please Tell Us Quantity of Your Food</h3>
                </div>
            </div>
            <?php echo $msg;?>
            <div class="modal-body about">
                <div class="login-top sign-top location">
                    <form action="" method="post">
                        

                        <input type="text" name="fname" class="" placeholder="Food Name" value="<?php echo $r11['fname'];?>" readonly required=""><br><br><br>
                        <input type="text" name="hotelname" class="" placeholder="Hotel Name" value="<?php echo $r11['hotelname'];?>" readonly required=""><br><br><br>
                        <input type="text" name="qty" class="" placeholder="Quantity" required=""><br><br><br>
                        <input type="text" name="tno" class="" placeholder="Quantity" required=""><br><br><br>
                        <input type="text" name="station" class="" placeholder="Quantity" required=""><br><br><br>
                        <input type="text" name="comp" class="" placeholder="Quantity" required=""><br><br><br>
                        <input type="text" name="seatno" class="" placeholder="Quantity" required=""><br><br><br>
                        <input type="submit" name="btn" value="Submit">


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





                
<?php include("include/footer.php");?>