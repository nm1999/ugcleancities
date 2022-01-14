
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client | Homepage</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="w3css.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="fonts/font-awesome.min.css">
        <script src="jquery.min.js"></script>
        <script src="index.js"></script>
</head>
<style>

  #img{
      border-radius:60%;
  }
  body{
      background-color:rgb(0,0,0,0.075);
  }
  #desc-img{
      border-radius:100px;
      border: 5px solid white;
      width:50%;
  }
  #hr1{
      border: 25px solid black;
      max-height: max-content;
  }
.navbar{
    box-shadow:1px 1px 18px 1px;
    position:fixed;
    width:100%;
}
#hd{
    text-shadow:2px 1px red;
    font-family:algerian;
}
.content-display{
    margin-left:300px;
}
</style>
<script>
//     function opennav() {
//     document.getElementsByClassName("w3-sidenav")[0].style.display="block";
//    }
//    function link() {
//        document.getElementsByClassName("w3-sidenav")[0].style.display="none";
//    }

</script>
<body>
<div class="main">
     <div class="nav navbar  w3-white ">
       
        <li><h3 id="hd">Uganda Clean Cities</h3></li>
        <li> <i class="" style="boreder:2px solid black;border-radius:100%;padding:10px;"></i></li>
    </div>
</div>
  
<div class="main-div d-flex row">
    <div class="div w3-sidenav  w3-card-4 col-md-2 w3-yellow w3-animate-left" >
        <div class="w3-container">
            <div class="">
                <img src="images/logo.png" alt="" id="img">
            </div>        
        </div>
        <div class="links">
            <br>
            <a href="#" class="innovations" onclick="link()"> <i class="fa fa-home innovations"></i> Innovations</a><br><br>
            <a href="#" class="sell-plastics" onclick="link()"><i class="fa fa-money"></i> Potiental sellers</a><br><br>
            <a href="#" class="feedback" onclick="link()"><i class="fa fa-comment"></i> Feedback</a><br><br>
            <a href="#" class="recycle" onclick="link()"><i class="fa fa-recycle"></i> Recycle centres</a><br><br>
            <a href="#" class="sensitization" onclick="link()"><i class="fa fa-lightbulb-o"></i> Sensitization</a><br><br>
            <a href="index.php"><i class="fa fa-power-off"></i> logout</a>
        </div>
    </div>
    <div class="content-display col-md-8">

    </div>  
</div>
<script>
    $(document).ready(function(){
        $(".content-display").load("dashboard.php")
        $(".innovations").click(function() {
            $(".content-display").load("innovations.php")
        });
        $(".sell-plastics").click(function () {
            $(".content-display").load("sellplastics.php")
        });

        $(".cities").click(function(){
            $(".content-display").load("cities.php")
        });
        $(".sensitization").click(function () {
            $(".content-display").load("sensitization.php")
        });
        $(".feedback").click(function () {
            $(".content-display").load("notifications.php")
        });
        $(".recycle").click(function () {
            $(".content-display").load("recycle.php")
        });
    });
</script>
</body>
</html>