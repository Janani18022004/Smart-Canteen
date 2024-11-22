<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$username=$_SESSION['username'];
$msg="";
$rdate=date("d-m-Y");

?>

<?php include("include/customerlink.php");?>
<div class="service-breadcrumb">
				<div class="container">
				<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="user.php">Home</a> <i>|</i></li>
							<li>Booking Report</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Booking Report</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
           <form action="" method="post">
		<div class="loacte_dealer w3l">
			<div class="container">
				<div class="select-box">
				   

                <div class="search-product ads-list">
					
					<div class="search find">
                            		
						  <input type="date" name="date1">
					</div>
				</div>
                <div class="search-product ads-list">
					
					<div class="search find">
						  <input type="submit" name="btn" value="Find Report">
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
    </div>
    </form>

   
            <br>
            <?php

function formatDate($inputDate) {
    $dateTime = new DateTime($inputDate);
    return $dateTime->format('d-m-Y');
}

if (isset($_POST['btn'])) {
    $selectedDate = $_POST['date1'];
    $selectedDate1 = formatDate($selectedDate);

    $result = mysqli_query($connect, "SELECT * FROM tbl_food_booking WHERE rdate LIKE '%$selectedDate1%' AND customer='$username' AND status='2'");

    if ($result) {
        ?>
        <!-- Header Section -->
        <div class="loacte_dealer w3l">
            <div class="container">
                <h3 class="tittle">BOOKING REPORT</h3>
            </div>
        </div>

        <!-- Table Section -->
        <div class="car-loan agile-w3">
            <div class="container">
                <div class="loan-main w3-agile">
                    <table class="table table-responsive">
                        <!-- Table Headings -->
                        <?php
                        $headings = array("S.NO", "CUSTOMER", "FOOD NAME", "QUANTITY", "PRICE AMOUNT");
                        echo "<thead><tr>";
                        foreach ($headings as $heading) {
                            echo "<th>{$heading}</th>";
                        }
                        echo "</tr></thead>";
                        ?>
                        <tbody>
                            <?php
                            $k = 1;

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <!-- Data Rows -->
                                    <tr>
                                        <td><?php echo $k; ?></td>
                                        <td><a href="" target="_blank"><?php echo $row['customer']; ?></a></td>
                                        <td><a href="" target="_blank"><?php echo $row['fname']; ?></a></td>
                                        <td><a href="" target="_blank"><?php echo $row['qty']; ?></a></td>
                                        <td><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row['price']; ?></td>
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
        <?php
    } else {
        echo "No results found.";
    }
} else {
    echo "No Records found";
}
}

?>

<!-- Additional Content After the Table -->
<br>
<br>

<?php include("include/footer.php");?>



                
