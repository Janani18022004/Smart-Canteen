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

<?php include("include/customerlink.php");?>

		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="hotel.php">Home</a> <i>|</i></li>
							<li>Booking Status</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Booking Status</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">BOOKING STATUS</h3>

					
			</div>
		</div>
        
  
                
                <div class="car-loan agile-w3">
    <div class="container">
        <div class="loan-main w3-agile">
            <table class="table table-responsive">
                <!-- Table Headings -->
                <?php
                $headings = array("S.NO", "FOOD TYPE", "FOOD NAME", "PRICE PER QUANTITY", "QUANTITY", "PRICE AMOUNT", "STATION", "EXPLORE");
                echo "<thead><tr>";
                foreach ($headings as $heading) {
                    echo "<th>{$heading}</th>";
                }
                echo "</tr></thead>";
                ?>
                <tbody>
                <?php
                $k = 1;
                $q2 = mysqli_query($connect, "SELECT * FROM tbl_food_booking WHERE customer='$username'");

                while ($r1 = mysqli_fetch_array($q2)) {
                    $q3 = mysqli_query($connect, "SELECT * FROM tbl_hotelfood WHERE hotelname='" . $r1['hotelname'] . "' AND fname='" . $r1['fname'] . "'");
                    $r2 = mysqli_fetch_array($q3);
                    ?>
                    <!-- Data Rows -->
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td><a href="<?php echo $r2['file']; ?>" target="_blank"><?php echo $r2['ftype']; ?></a></td>
                        <td><a href="<?php echo $r2['file']; ?>" target="_blank"><?php echo $r1['fname']; ?></a></td>
                        <td><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $r2['price']; ?></td>
                        <td><?php echo $r1['qty']; ?></td>
                        <td><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $r1['price']; ?></td>
                        <td><?php echo $r1['station']; ?></td>
                        <td class="ap-ex">
                        <?php
                            if($r1['status']==0){
                                ?>
                            <a class="expolre approval" href="foodedit.php?id=<?php echo $r1['id'];?>&hotelname=<?php echo $r1['hotelname'];?>">Cancel</a><br><br>
                            
                                <a class="expolre approval" href="pay.php?id=<?php echo $r1['id'];?>&customer=<?php echo $r1['customer'];?>">Payment</a>
                                <?php 

                            }
                            else if($r1['status']==1){
                                echo "Money Paid";
                            }

                            else{
                                echo "Food Delivered";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                    $k++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
            <br>
            <br>

                
<?php include("include/footer.php");?>