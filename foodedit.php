<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$username=$_SESSION['username'];
$msg="";
$q1=mysqli_query($connect,"select * from tbl_hotelfood where id='$id' and hotelname='$hotelname'");
$mr=mysqli_fetch_array($q1);

if(isset($btn))
{
	
$uploadDir = "uploads/food/";
$file = $uploadDir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
    echo "";
} else {
    echo "";
}

$up=mysqli_query($connect,"update tbl_hotelfood set price='$price',file='$file' where id='$id' and hotelname='$hotelname'");
 
			if($up)
			{
		 ?>
	<script language="javascript">
		alert("Food Details Updated");
		window.location.href="hotel.php";
		 </script>
		 <?php
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
							<li><a href="hotel.php">Home</a> <i>|</i></li>
							<li>Edit food</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Edit Food</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">EDIT FOOD</h3>

					
			</div>
		</div>
        
        <div class="banner-bottom">

                    <div class="container">
                        <div class="bottom-form">
                            <div class="inner-text">
                                
                            <form action="" method="post" enctype="multipart/form-data">
                                <h3>Food Details</h3><br>
                                <p style="color:red"><?php echo $msg;?></p>
                                    <div class="best-hot">
                                        <h5>Food Name</h5>
                                        <input type="text" class="" name="fname" placeholder="Name" value="<?php echo $mr['fname'];?>" readonly required="">
                                    </div>

                                    <div class="section_drop2">
                                    <h5>Veg/Non Veg</h5>
                                        <select id="country6" name="ftype" readonly>
                                                                        <option value="Veg"><?php echo $mr['ftype'];?></option>
                                                                        

                                                                    </select>
                                                                </div>
                                    <div class="best-hot">
                                        <h5>Price</h5>
                                        <input type="text" name="price" class="" placeholder="Price" required="">
                                    </div>
                                    <div class="best-hot">
                                        <h5>Image</h5>
                                        <input type="file" class="" name="file" placeholder="Price" required="">
                                    </div>
                                    <br>
                                    <input type="submit" name="btn" value="Edit">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br><br>
                
           
   
            <br>
            <br>

                
<?php include("include/footer.php");?>