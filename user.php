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
                    <h3>Please Tell Us Your College And Food</h3>
                </div>
            </div>
            <div class="modal-body about">
                <div class="login-top sign-top location">
                    <form action="" method="post">
                        <select id="country12" class="frm-field required" name="station">
                            <option value="null">Select College</option>
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
                                echo '<option value="null">No Colleges found</option>';
                            }
                            ?>
                        </select>
                        <br><br><br><br>
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
    ?>
    <div class="search-car w3l">
        <div class="container">
            <div class="search-car-inner w3l">
                <div class="col-md-12 search-car-right-text w3">
                    <div class="well well-sm">
                        <strong>Display</strong>
                        <div class="btn-group">
                            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list"></span>List</a>
                            <a href="#" id="grid" class="btn btn-default btn-sm two"><span class="glyphicon glyphicon-th"></span>Grid</a>
                        </div>
                    </div>
                    <div id="products" class="row list-group">
                        <form action="1.php" method="post">
                            <?php
                            if ($n11 > 0) {
                                while ($r11 = mysqli_fetch_array($q11)) {
                                    $username = $r11['username'];
                                    $usernamesArray = explode('user', $username);
                                    $usernamesArray = array_map('trim', array_filter($usernamesArray));
                                    $inCondition = "'" . implode("','", $usernamesArray) . "'";
                                    $inCondition = str_replace("''", ",", $inCondition);

                                    $sql = mysqli_query($connect, "SELECT * FROM tbl_hotelfood WHERE hotelname IN ($inCondition)");
                                    if ($sql) {
                                        $k = 1;
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                            ?>
                                            <div class="item col-xs-4 col-lg-4">
                                                <div class="thumbnail">
                                                <input type="checkbox" name="selected_rows[]" value="<?php echo $row['id']; ?>" style="margin-left: 5px; vertical-align: middle;">

                                                    <a href="" data-toggle="modal" data-target="#myModal6">
                                                        <img class="group list-group-image" src="<?php echo $r11['file']; ?>" alt="Catchy Carz">
                                                    </a>
                                                    <div class="table-text">
                                                        <h4><a href="" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname"><?php echo $row['fname']; ?></span></a></h4><br>
                                                        
                                                        <div class="other-details">
                                                            <a href="#">
                                                                <span class="rupee-lac slprice"> RS.<?php echo $row['price']; ?> &nbsp;&nbsp;</span>
                                                            </a>
                                                            <div class="clearfix"></div>
                                                            <a href="">
                                                                <p class="listing-item-kms">
                                                                    <span class="slkms"><?php echo $row['ftype']; ?>&nbsp;</span>
                                                                    <span class="margin-left5 margin-right5">|</span>
                                                                    <span class="fuel">Hotel-<?php echo $r11['hotelname']; ?></span>
                                                                    <span class="margin-left5 margin-right5">|</span>
                                                                    <span>date-<?php echo $r11['rdate']; ?></span>
                                                                </p>
                                                                <p class="listing-item-area"><span class="cityname">Quantity-<?php echo $r11['qty']; ?></span></p>
                                                                <?php
                                                                $q222 = mysqli_query($connect, "SELECT * FROM tbl_user WHERE username='" . $r11['customer'] . "'");
                                                                $r111 = mysqli_fetch_array($q222);
                                                                ?>
                                                                <p class="text-light-grey deliverytext"></p>
                                                            </a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="list-form">
                                                            <div class="phone-info">
                                                               <!--  <input type="text" name="hotelname[]" value="<?php echo $row['hotelname']; ?>">
                                                                <input type="text" name="foodname[]" value="<?php echo $row['fname']; ?>" readonly>
                                                                <input type="text" name="qty[]" class="phone" placeholder="Quantity">
                                                                <input type="text" name="price[]" class="phone" value="<?php echo $row['price']; ?>" readonly> -->
                                                                <input type="text" name="qty[]" class="phone" placeholder="Quantity">

                                                            </div>
                                                            <div class="get-one">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $k++;
                                        }
                                    } else {
                                        echo "Error in SQL query: " . mysqli_error($connect);
                                    }
                                }
                            } else {
                                echo "No Hotels found!";
                            }
                            ?>
                            <!-- Move the submit button outside the loop -->
                            <div class="modal-body about">
                                <div class="dis-contact">
                                    <h4>Contact Information</h4>
                                    <input type="text" name="tno" class="name active" placeholder="Mobile No" required="">
                                    <input type="text" name="station" class="name active" placeholder="College" required="">
                                    <input type="text" name="comp" class="email" placeholder="dept" required=""><br><br>
                                    <input type="text" name="seatno" class="phone" placeholder="Year" required="">
                                </div>
                            </div>
                            <div class="get-one">
                                <input type="submit" name="ntn" value="Booking">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    echo "";
}

?>



      <script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
					<!---->
							<script type="text/javascript" src="js/jquery-ui.js"></script>
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 200000,
										values: [ 5000, 100000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
<script>
 $(document).ready(function() {
    // Add the "list-group-item" class to all items initially (default view)
    $('#products .item').addClass('list-group-item');

    // Set up the event listeners
    $('#list').click(function(event){
        event.preventDefault();
        $('#products .item').addClass('list-group-item');
        $('#products .item').removeClass('grid-group-item');
    });

    $('#grid').click(function(event){
        event.preventDefault();
        $('#products .item').removeClass('list-group-item');
        $('#products .item').addClass('grid-group-item');
    });
});

</script>

                                                                   
              
<?php include("include/footer.php");?>

