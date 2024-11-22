<?php
session_start();
include("include/dbconnect.php");
$username=$_SESSION['username'];
extract($_REQUEST);
$msg="";
$rdate=date("d-m-Y");
$query = mysqli_query($connect, "SELECT * FROM tbl_food_booking WHERE customer='$username'");
$r11 = mysqli_fetch_array($query);



?>
<?php
if ($act == "1") {

    mysqli_query($connect, "UPDATE tbl_food_booking SET status='2' WHERE id='$id' AND customer='$customer'");
    ?>
    <script language="javascript">
        alert("Food Delivered!");
        window.location.href = "bookingdet1.php";
    </script>
<?php
}
?>




<?php include("include/hotellink.php");?>

		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="user.php">Home</a> <i>|</i></li>
							<li>Booking Details</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Booking Details</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
            
		<!--//breadcrumb-->
		   <!--/sell-car -->
           <div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">BOOKING DETAILS</h3>

					
			</div>
		</div>
        <div class="search-car w3l">
			<div class="container">
			    <!--/search-car-inner -->
					<div class="search-car-inner w3l">
					<!--/search-car-left-nav -->
						
						<!--//search-car-left-nav -->
						<!--/search-car-right-text -->
						<div class="col-md-12 search-car-right-text w3">
							<div class="well well-sm">
								<strong>Display</strong>
								<div class="btn-group">
									<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
									</span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm two"><span
										class="glyphicon glyphicon-th"></span>Grid</a>
								</div>
							</div>
                            <?php
$q2 = mysqli_query($connect, "SELECT * FROM tbl_food_booking WHERE hotelname='$username' ORDER BY id DESC");
$n1 = mysqli_num_rows($q2);
        if ($n1 > 0) {
        ?>
							<div id="products" class="row list-group">
								<div class="item  col-xs-4 col-lg-4">
									<div class="thumbnail">
                                    <?php
                    $k=1;

                while ($r1 = mysqli_fetch_array($q2)) {
                    $q22 = mysqli_query($connect, "select * from tbl_hotelfood where hotelname='" .$r1['hotelname']. "'");
                    $r11 = mysqli_fetch_array($q22);
                    ?>
										 <a href="#" data-toggle="modal" data-target="#myModal6"><img class="group list-group-image" src="<?php echo $r11['file'];?>" alt="Catchy Carz"></a>
		                                       <div class="table-text">
                                                                <h4 ><a href="" title="Maruti Suzuki 800 AC" class="click-search"><span class="spancarname"><?php echo $r1['fname'];?></span></a></h4><br>

                                                                
                                                                <div class="other-details">
                                                                    
                                                                    <a href="">
                                                                        <span class="rupee-lac slprice"> 
                                                                            <?php  
                                                                            if($r1['status']==0){
                                                                                echo '<p style="color:red;">Not Paid</p>';
                                                                            } else if($r1['status']==1){
                                                                                echo '<p style="color:green;">Paid</p>';
                                                                            } else {
                                                                                echo '';
                                                                            }
                                                                            ?>
                                                                        </span>
                                                                    </a>
                                                                    <a href="used_cars.html">
                                                                      <span class="rupee-lac slprice"> RS.<?php echo $r1['price'];?>  &nbsp;&nbsp;</span> 
                                                                    </a>

                                                                    <div class="clearfix"></div>																	
                                                                    <a href="">
                                                                        <p class="listing-item-kms"><span class="slkms"><span class="fuel">Customer-<?php echo $r1['customer'];?></span></p>
                                                                       
                                                                    </a>
                                                                </div>
         
																<div class="clearfix"></div>																	
                                                                    <a href="">
                                                                        <p class="listing-item-kms"><span class="slkms"><?php echo $r11['ftype'];?>&nbsp;</span><span class="margin-left5 margin-right5">|</span><span class="fuel">Hotel-<?php echo $r1['hotelname'];?></span><span class="margin-left5 margin-right5">|</span><span>date-<?php echo $r1['rdate'];?></span></p>
                                                                        <p class="listing-item-area"><span class="cityname">Quantity-<?php echo $r1['qty'];?></span></p>
                                                                        <?php
                                                                        $q222 = mysqli_query($connect, "SELECT * FROM tbl_user WHERE username='" .$r1['customer']. "'");
                                                                        $r111 = mysqli_fetch_array($q222);
                                                                        ?>


                                                                        <p class="listing-item-area"><span class="cityname">Mobile-<?php echo $r111['mobile'];?></span></p>
                                                                        <p class="listing-item-area"><span class="cityname">College-<?php echo $r1['station'];?></span></p>
                                                                        <!-- <p class="listing-item-area"><span class="cityname">Train No-<?php echo $r1['tno'];?></span></p>
                                                                        <p class="listing-item-area"><span class="cityname">Compartment-<?php echo $r1['comp'];?></span></p>
                                                                        <p class="listing-item-area"><span class="cityname">Seat No-<?php echo $r1['seatno'];?></span></p> -->
                                                                        <p class="text-light-grey deliverytext"></p>
                                                                    </a>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="list-form">
                                                                    <div class="phone-info">
																	   <form action="" method="post">
																	   </form>
																	</div>
                                                                    <?php
                                                                    if($r1['status']==1){
                                                                        ?>
                                                                    
																	<div class="get-one"><a href="bookingdet1.php?act=1&id=<?php echo $r1['id'];?>&customer=<?php echo $r1['customer'];?>">Delivery<a></div>
                                                                    <?php
                                                                    }
                                                                    else if($r1['status']==2){
                                                                        echo '<p style="color:green;">Food Delivered</p>';


                                                                    }
                                                                    else{
                                                                        echo "Not Paid";
                                                                    }
                                                                    ?>
                                                                
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                               
         
                                                               <div class="clearfix"></div>
                                                                
                                                               
                                                            </div>
                                                            <?php
                $k++;
            }
            ?>
										
									</div>
								</div>

							</div>
                            <?php
} else {
    ?><p align="center">No Booking details are here!</p><?php
}
?>
						 </div>
				            
						<!--//search-car-right-text -->
						<div class="clearfix"></div>
					</div>
				 <!--//search-car-inner -->
			</div>
		</div>
          
   

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