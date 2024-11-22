<?php
session_start();
include("include/dbconnect.php");
$username=$_SESSION['username'];
$msg="";
$rdate=date("d-m-Y");

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
							<li><a href="user.php">Home</a> <i>|</i></li>
							<li>Locate Food</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Locate Food</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
            
		<!--//breadcrumb-->
		   <!--/sell-car -->
           <div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">LOCATE HOTEL FOOD</h3>

					
			</div>
		</div>
          
            <div class="ab">
    <div class="modal-dialog sign">
        <div class="modal-content about">
            <div class="modal-header one">
                <div class="discount one">
                    <h3>Please Tell Us Your Station And Food</h3>
                </div>
            </div>
            <div class="modal-body about">
                <div class="login-top sign-top location">
                    <form action="" method="post">
                    <select id="country12" class="frm-field required" name="station">
                        <option value="null">Select Station</option>
                        <?php
                        $result = mysqli_query($connect, "SELECT * FROM tbl_hotel");

                        if (mysqli_num_rows($result) > 0) {
                            $uniqueStations = array();

                            while ($row = mysqli_fetch_array($result)) {
                                $stations = explode(',', $row['station']);
                                $uniqueStations = array_merge($uniqueStations, array_map('trim', $stations));
                            }

                            // Remove duplicates from the array
                            $uniqueStations = array_unique($uniqueStations);

                            foreach ($uniqueStations as $station) {
                                echo '<option value="' . $station . '">' . $station . '</option>';
                            }
                        } else {
                            echo '<option value="null">No stations found</option>';
                        }
                        ?>
                    </select>

                        <br><br><br><br>
                        <input type="text" name="fname" class="" placeholder="Food Name" required=""><br><br><br>
                        <input type="submit" name="btn" value="Search">


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
extract($_REQUEST);

if (isset($btn)) {
    $hh = array();
    $hh2 = array();

    if ($station != "") {
        $q11 = mysqli_query($connect, "SELECT * FROM tbl_hotel WHERE station LIKE '%$station%' OR address LIKE '%$station%' OR city LIKE '%$station%'");
    } else {
        $q11 = mysqli_query($connect, "SELECT * FROM tbl_hotel");
    }

    $n11 = mysqli_num_rows($q11);

    if ($n11 > 0) {
        while ($r11 = mysqli_fetch_array($q11)) {
            $hh[] = $r11['username'];
        }

        // Fetch data from tbl_hotelfood using the usernames from tbl_hotel
        if (!empty($hh)) {
            $usernames = implode("','", $hh);
            $q2 = mysqli_query($connect, "SELECT * FROM tbl_hotelfood WHERE fname='$fname' AND hotelname IN ('$usernames')");
            $n2 = mysqli_num_rows($q2);

            if ($n2 > 0) {
                while ($r2 = mysqli_fetch_array($q2)) {
                    $hh2[] = $r2['fname'];
                }
            }
        }
    }
}


// Your existing code ...

// Initialize arrays to store usernames and corresponding fnames
$usernamesArray = array();
$fnamesArray = array();

// Explode each username and store corresponding fnames
if (!empty($hh)) {
    foreach ($hh as $index => $username) {
        // Split the username by comma (assuming it is comma-separated)
        $usernames = explode(',', $username);

        // Store the exploded username
        $usernamesArray[] = implode(', ', $usernames);

        // Store the corresponding fname from hh2
        if (isset($hh2[$index])) {
            $fnamesArray[] = $hh2[$index];
            ?>
            
<?php
        } else {
            $fnamesArray[] = ""; // You can set a default value if no corresponding fname is found
        }
    }
} else {
    echo "No Foods found.";
}


if (!empty($usernamesArray)) {
    $usernamesString = implode("','", $usernamesArray);
    $query = mysqli_query($connect, "SELECT * FROM tbl_hotelfood WHERE hotelname IN ('$usernamesString')");
    $r11 = mysqli_fetch_array($query);
    
    ?>
    <div class="on-road-price w3l">
			<div class="container">
			  <!--price-top1 -->
			 <div class="price-top">
			    <div class=" price-info">
			       <div class="col-md-5 price-img">
				     <div class="view second-effect">
												<a href="single.html" title="Catchy Carz">
													<img src="<?php echo $r11['file'];?>" alt="" class="img-responsive">
													<div class="mask">
														<p><?php echo $r11['fname'];?> <span></span> </p>
													</div>
												</a>	
											</div>
					  <h4><?php echo $r11['fname'];?></h4>
		
				   </div>
				   <div class="col-md-4 price-text">
				       <div class="price-text-sec">
                       <div class="clearfix"> </div>
                               <div class="inner-price">
						         <h5>Hotel Name</h5>
								 <p><?php echo $r11['hotelname'];?></p>
								<div class="clearfix"> </div>
						   </div>

						   	<div class="clearfix"> </div>
                               <div class="inner-price">
						         <h5>Food Type</h5>
								 <p><?php echo $r11['ftype'];?></p>
								<div class="clearfix"> </div>
						   </div>
						   <div class="inner-price">
						         <h5>Price</h5>
								 <p>Rs.<?php echo $r11['price'];?></p>
								<div class="clearfix"> </div>
						   </div>
						   
						</div>
				   </div>
				   <div class="col-md-3 ad-benefits">
				       <ul>
						
						<li><a class="get" href="<?php echo $r11['id'];?>" data-toggle="modal" data-target="#myModal3">Get an instant Quote</a></li>
					</ul>
				   </div>
			       <div class="clearfix"> </div>
			     </div>
			     
			 </div>

				 <!--//price-top4 -->
			</div>
		</div>
		<!-- //on-road-price-section -->
</div>
<div class="modal ab fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Make car insurance buying easier</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top get">
								  <ul class="car-insurance">
								       <li><i class="fa fa-signal" aria-hidden="true"></i><h6> Zero <br> Depreciation</h6></li>
									   <li><i class="fa fa-truck" aria-hidden="true"></i><h6> Road-side <br> assistance</h6></li>
									   <li><i class="fa fa-gavel" aria-hidden="true"></i><h6> Hydro-static <br> cover-lock</h6></li>
								     </ul>
							     <form action="#" method="post">
									 
									<input type="text" name="email" class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">		
									<input type="submit" value="Submit">
								</div>	
								</form>
								
							</div>
						
							
						 </div>
								
					</div>
				</div>
			</div>
    <?php
}

?>




                
<?php include("include/footer.php");?>