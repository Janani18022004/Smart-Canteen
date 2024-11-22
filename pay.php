<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$username=$_SESSION['username'];
$msg="";
$rdate=date("d-m-Y");
$q1=mysqli_query($connect,"select * from tbl_food_booking where id='$id' and customer='$customer'");
$mr1=mysqli_fetch_array($q1);

if(isset($btn))
{
	


    $up=mysqli_query($connect,"update tbl_food_booking set status='1' where id='$id' and customer='$customer'");
    if($up)
			{
		 ?>
	<script language="javascript">
		alert("Paid");
		window.location.href="bookstatus.php";
		 </script>
		 <?php
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
							<li>Payment</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Payment</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="loacte_dealer w3l">
			<div class="container">
			    <h3 class="tittle">PAYMENT</h3>

					
			</div>
		</div>
         <form action="" method="post">
        <div class="row setup-content" id="step-5">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3>Payment Information</h3>

                            <label>Choose Payment Method</label> <br/>
                            <select id="pay_method" onchange="displayPayment()">
                                <option value="NA" selected=""></option>
                                <option value="C">Credit Card</option>
                                <option value="B">Debit </option>
                            </select>
<br/> <br/><br/><br/>
                           



                            <div id="card-payment" class="payment" style="display:none">           
                                <div class="form-group owner">
                                    <label for="owner">Cardholder Name</label>
                                    <input type="text" class="form-control" id="owner">
                                </div>
                                <div class="form-group" id="card-number-field">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="text" class="form-control" id="cardNumber">
                                </div>
                                <div class="form-group CVV">
                                    <label for="cvv">CVC</label>
                                    <input type="text" class="form-control" id="cvc">
                                </div>
                                <div class="form-group" id="expiration-date">
                                    <label>Expiration Date</label> <br/>
                                    <select name="months" id="months">
                                        <option value="01">January</option>
                                        <option value="02">February </option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <select name="months" id="months">
                                        <option value="18"> 2018</option>
                                        <option value="19"> 2019</option>
                                        <option value="20"> 2020</option>
                                        <option value="21"> 2021</option>
                                        <option value="22"> 2022</option>
                                        <option value="23"> 2023</option>
                                        <option value="24"> 2024</option>
                                        <option value="25"> 2025</option>
                                        <option value="26"> 2026</option>
                                        <option value="27"> 2027</option>
                                        <option value="28"> 2028</option>
                                    </select>
                                    <br/><br/>

                                    
                                </div>
                            </div>  


                            <div id="bank-payment" class ="payment" style="display:none">
                            <div class="form-group owner">
                                    <label for="owner">Cardholder Name</label>
                                    <input type="text" class="form-control" id="owner">
                                </div>
                                <div class="form-group" id="card-number-field">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="text" class="form-control" id="cardNumber">
                                </div>
                                <div class="form-group CVV">
                                    <label for="cvv">CVC</label>
                                    <input type="text" class="form-control" id="cvc">
                                </div>
                                <div class="form-group" id="expiration-date">
                                    <label>Expiration Date</label> <br/>
                                    <select name="months" id="months">
                                        <option value="01">January</option>
                                        <option value="02">February </option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <select name="months" id="months">
                                        <option value="18"> 2018</option>
                                        <option value="19"> 2019</option>
                                        <option value="20"> 2020</option>
                                        <option value="21"> 2021</option>
                                        <option value="22"> 2022</option>
                                        <option value="23"> 2023</option>
                                        <option value="24"> 2024</option>
                                        <option value="25"> 2025</option>
                                        <option value="26"> 2026</option>
                                        <option value="27"> 2027</option>
                                        <option value="28"> 2028</option>
                                    </select>
                                    <br/><br/>

                                    
                                </div>
                            </div>        




                            <button class="btn btn-primary" type="submit" name="btn">Pay RS.<?php echo $mr1['price'];?></button>
                        </div>
                    </div>
                </div>
            </form>


        

        
            <br>
            <br>

                
<?php include("include/footer.php");?>