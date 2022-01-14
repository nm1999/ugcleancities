<!DOCTYPE html>
<html>
<head>
	<title>Notificaton | messages </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="w3schools.css">
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript">
			function Hint(){
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						document.getElementsByClassName("panel-body")[0].innerHTML=xmlhttp.responseText;
					}
				};
				xmlhttp.open("GET","showchats.php",true);
				xmlhttp.send();
			}
			function send(argument) {
				var message = document.getElementById("text").value;
				var email ="<?php echo $name?>";
				document.getElementsByClassName("panel-body")[0].innerHTML=email;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (xmlhttp.readyState==4 && xmlhttp.status==200) {
						document.getElementsByClassName("panel-body")[0].innerHTML= xmlhttp.responseText;
					}
				};
				xmlhttp.open("POST","chats.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("message="+message+"&email="+email);
				$(document).ready(function(){
					$("#text").val("");
				});
			}
		</script>
</head>
<style type="text/css">
	.panel{
		
		margin-top:10px;
		margin-right:14px;
		margin-left:60px;
	}
	#text{
 		max-width:70%;
 	}
 	.panel-body{
 		height:400px;
 		padding:10px;
 		resize:horizontal;
 		overflow:auto;
 	}
	.modal-footer{
		background-color:rgb(0,0,0,0.054);
	}
	.modal-header{
		background-color:lightgreen;
		height:100px;
	}
	.notice{
		width:78%;
		height:500px;
		margin-left:40px;
		margin-top:5px;
		border-radius:5px;
	}
	.notice:hover{
		box-shadow:1px 1px 8px 1px;
	}
	header{
		max-width:90%;
		margin-left:23px;
		margin-top:10px;
		padding:5px;
		text-align: center;
		background-color:rgb(0,0,0,0.075);
		box-shadow:1px 1px 8px 1px;
	}
	.notes{
		margin-top:10px;
	}
	.notes ul li{
		margin-top:20px;
	}
	.maindiv{
		display:inline-flex;
	}
</style>
<body>
<div class="maindiv">
	<div class="panel modal-content ">
			<div class="modal-header">
				<h4><img src="images/logo.png" style="width:70px;border-radius:50%;"> Live chat </h4>
			</div>
			<div  class="panel-body">
				<p style="padding:10px;"><b>Kato Lubwama </b>: Hi , is there any jobs</p>
				<p style="padding:10px;"><b>Nalule Sharon</b> : Where is your head office</p>
				<p style="padding:10px;"><b>Wassawa John</b>: How can i become part o this movement</p>
				<p style="padding:10px;"><b>Opio Geogrey </b>: We really greatful</p>
				<p style="padding:10px;"><b>Akello Suzan</b>:  We need ur services also int he villages</p>
				<p style="padding:10px;"><b>Nakiito Lugonvu</b> : masaka city has few collection centers</p>
				<p style="padding:10px;"><b>Abarikurungi Joan </b>: Thanks for keeping us clean</p>'
				
			</div>
			<div class="">
				<div class="navbar">
					<input type="text" placeholder="Ask questions......" id="text" class="form-control" required="" onkeyup="Hint()">
					<input type="submit" name="submit" value="send" class="w3-btn btn-success" onclick="send()" >
				</div>
			</div>
	</div>
	
</div>
</body>
</html>