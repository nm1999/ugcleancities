<?php
$conn= new mysqli("localhost","root","","jlm_shoppers");
	if (!$conn) {
		echo "connection failed";
	}

	$sel= "SELECT * from items where id>0";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping | Here </title>

		<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="w3schools.css">
		<link rel="stylesheet" type="text/css" href="shopping.css">
		<script type="text/javascript" src="shopping.js"></script>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery.min.js"></script>
<style type="text/css">
	.section .electronics{
		float:left;
		width:235px;
		height:auto;
		margin:22px;
	}
		.device{
		width:110%;
		border:1px solid #ddd;
		height:auto;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		background-color:white;
	}
	.electronics .device{
		float:left;
	}
</style>
</head>
<body>
	<div class="content" id="result">				
		<div class="divs">
			<div class="section">				
							<div class="electronics">
								<div class="device">									
									<img src="images/plastic1.jpg" class="img-fluid rounded-circle bordered" id="img">			   
								    <div class="desc ">				   								    	
								  		<p>Keep city clean</p>			    	
								    </div>			
								</div>
								<div class="device">									
									<img src="images/plastic2.jpg" class="img-fluid rounded-circle bordered" id="img">			   
								    <div class="desc ">				   								    	
								  		<p>Keep the candle burning</p>			    	
								    </div>			
								</div>
								<div class="device">									
									<img src="images/plastic3.jpg" class="img-fluid rounded-circle bordered" id="img">			   
								    <div class="desc ">				   								    	
								  		<p>Stay clean</p>			    	
								    </div>			
								</div>
							</div>
						</div>			
		</div>



		
  
</body>
</html>