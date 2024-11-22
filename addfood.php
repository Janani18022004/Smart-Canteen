<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$username=$_SESSION['username'];
$msg="";
$rdate=date("d-m-Y");
if(isset($btn))
{
	
$uploadDir = "uploads/food/";
$file = $uploadDir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
    echo "";
} else {
    echo "";
}
$q1=mysqli_query($connect,"select * from tbl_hotelfood where fname='$fname' and hotelname='$username'");
	 $n1=mysqli_num_rows($q1);
	 if($n1==0)
	 {
    $mq=mysqli_query($connect,"select max(id) from tbl_hotelfood");
	$mr=mysqli_fetch_array($mq);
	$id=$mr['max(id)']+1;
 $ins=mysqli_query($connect,"insert into tbl_hotelfood(id,hotelname,fname,ftype,price,file,rdate) values($id,'$username','$fname','$ftype','$price','$file','$rdate')");
			if($ins)
			{
		 ?>
	<script language="javascript">
		alert("Food Added");
		window.location.href="hotel.php";
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
<?php
if ($act == "1") {
    mysqli_query($connect, "DELETE FROM tbl_hotelfood WHERE id='$id'");
    ?>
    <script language="javascript">
        alert("Deleted!");
        window.location.href = "hotel.php";
    </script>
<?php
}
?>

<?php include("include/hotellink.php");?>

		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="hotel.php">Home</a> <i>|</i></li>
							<li>Add food</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Add Food</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">ADD FOOD</h3>

					
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
                                        <input type="text" class="" name="fname" placeholder="Name" required="">
                                    </div>

                                    <div class="section_drop2">
                                    <h5>Veg/Non Veg</h5>
                                        <select id="country6" name="ftype">
                                                                        <option value="Veg">Veg</option>
                                                                        <option value="Non Veg">Non Veg</option>

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
                                    <input type="submit" name="btn" value="Add">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br><br>
                
                <div class="car-loan agile-w3">
    <div class="container">
        <h3 class="tittle">FOODS DETAILS</h3>

        <div class="loan-main w3-agile">
            <?php
            $q2 = mysqli_query($connect, "SELECT * FROM tbl_hotelfood WHERE hotelname='$username'");
            $k = 1;

            // Display the headings outside the loop
            $headings = array("S.NO", "FOOD NAME", "PRICE AMOUNT", "FOOD TYPE", "EXPLORE");
            foreach ($headings as $heading) {
                ?>
                <div class="popular-category">
                    <h4><?php echo $heading; ?></h4>
                </div>
                <?php
            }
            ?>
            <div class="clearfix"></div>
        </div>

        <?php
        // Iterate through data rows
        while ($r1 = mysqli_fetch_array($q2)) {
            ?>
            <div class="loan-main w3-agile">
                <div class="popular-category">
                    <ul>
                        <li><a href="#"><?php echo $k; ?></a></li>
                    </ul>
                </div>
                <div class="popular-category">
                    <ul>
                        <li><a href="<?php echo $r1['file']; ?>" target="_blank"><?php echo $r1['fname']; ?><span class="rate-sub"></span></a></li>
                    </ul>
                </div>
                <div class="popular-category">
                    <ul>
                        <li><a href="#"><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $r1['price']; ?></a></li>
                    </ul>
                </div>
                <div class="popular-category">
                    <ul>
                        <li><a href="#"><?php echo $r1['ftype']; ?></a></li>
                    </ul>
                </div>
                
                <div class="popular-category">
                    <ul>
                        <li class="ap-ex">
                            <a class="expolre approval" href="foodedit.php?id=<?php echo $r1['id'];?>&hotelname=<?php echo $r1['hotelname'];?>">Edit</a>
                            <a class="expolre approval" href="hotel.php?act=1&id=<?php echo $r1['id'];?>">Delete</a>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php
            $k++;
        }
        ?>
    </div>
</div>

   
            <br>
            <br>

                
<?php include("include/footer.php");?>