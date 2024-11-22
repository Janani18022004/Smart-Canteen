<!DOCTYPE html>
<html>
<head>
<title><?php include("include/title.php");?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Catchy Carz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
			<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <style>
    .unit-container {
        display: flex;
        flex-direction: column;
        gap: 10px; /* Adjust the gap as needed */
    }
        .car-loan {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .ap-ex a {
            display: inline-block; /* Add this line to make links appear on the same line */
			padding: 8px 16px;
			text-align: center;
			text-decoration: none;
			background-color: #4CAF50;
			color: white;
			border-radius: 5px;
			margin-right: 5px;
        }

        .ap-ex a:hover {
            background-color: #45a049;
        }
		.container {
    max-width: 960px;
}

.pricing-header {
    max-width: 700px;
}

.card-deck .card {
    min-width: 200px;
    height: 400px;
}

.card-body li { /* Adds line spacing for card descriptions */
    padding: 8px 0;
}


.card-header {
    border-bottom: 4px solid #086495;

}

.box-shadow {
    box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
}

.img-responsive { /* Measurements for KPC Logo on top */
    height: 90px;
    width: 150px;
}

.font-weight-normal { /* For the title on the cards */
    text-transform: uppercase;
}

.btn-primary { /* Sign up Button Style */
    background: #086495;
    color: #ffffff;
    border: none;

}

.btn-primary:hover {
    background: #0a7ab6;
    color: #ffffff;

}


/*Print and Online Page Styles*/

.stepwizard-step p {
    margin-top: 10px;
    color: #086495;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}


.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 2px;
    background-color: #086495;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;

}

h3 {
    font: Roboto, sans-serif;
    font-weight: 400;
}

label {
    color: #086495;
    font: Roboto, sans-serif;
    font-weight: 200;
}



.nextBtn {
    background-color: #086495;
    width: 100px;
    margin-right: 150px;
}



.form-control {
    width: 50%;
}

.selectpicker {
    width: 50%;
    height: 35px;
}

select {
    width: 50%;
    height: 32px;
}
</style>
<!--//web-fonts-->
</head>
<body>
		<div id="demo-1" class="banner-inner">

	 <div class="banner-inner-dott">
       <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				          <div id="sidebar"> 
						     <h4 class="menu">Menu</h4>
						          <ul>
							    <li><a href="#">Canteen <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
							      <ul>
									  <li><a href="user.php"><span>Search</span></a></li>
									 
								   </ul>
                                   <li><a href="#">Booking <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>

                                   <ul>
									  <li><a href="bookingdet.php">Food Booking<span></span></a></li>
									  <li><a href="bookstatus.php">Booking Status<span></span></a></li>

									 
								   </ul>
                                   <li><a href="#">Feedback <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>

                                   <ul>
									  <li><a href="feedback.php">Feedback<span></span></a></li>

									 
								   </ul>
								   <li><a href="#">Report <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>

										<ul>
										<li><a href="cusreport.php">My Report<span></span></a></li>

										
										</ul>
							   </li>
							    
							  
							   
						   </ul>
						   <div id="sidebar-btn">
							   <span></span>
							   <span></span>
							   <span></span>
						   </div>
					   </div>

							 <script>
								  var sidebarbtn = document.getElementById('sidebar-btn');
									var sidebar = document.getElementById('sidebar');
								   sidebarbtn.addEventListener('click', function () {
								  if(sidebar.classList.contains('visible')){
										sidebar.classList.remove('visible'); 
								   }else {
										sidebar.className = 'visible';
									}
								  });
								</script>
					    <!-- //sidebar -->
					  
					</div>
				  <!-- //header-left -->
		             <div class="search-box">
						
						
						<!-- //search-scripts -->
					    <ul>
							
			
							<li>
                            <a href="logout.php">Logout</a>
							
						    </li>
						</ul>
						
					</div>
				   
						
					</div>
					<div class="clearfix"></div>
		    <!--banner-info-->
			<div class="banner-info">
            <h1><a href="">Efficiently Improving The Canteen Experience By smart Campus Solution <span class="logo-sub"></span> </a></h1>

				<p>Eat it – try it – buy it!</p>
			     
			</div>
            
		</div>
	 </div>
	 <script>
		function displayPayment() {
                                    var pay_method = document.getElementById("pay_method");
                                    var divc = document.getElementById("card-payment");
                                    var divb = document.getElementById("bank-payment")
                                    divc.style.display = pay_method.value == "C" ? "block" : "none";
                                    divb.style.display = pay_method.value == "B" ? "block" : "none";

                                }
	 </script>

     



   