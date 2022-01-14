<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="w3css.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="fonts/font-awesome.min.css">
        <script src="jquery.min.js"></script>
        <script src="index.js"></script>
</head>
<style>
    
</style>
<script>
  $(document).ready(function(){
        $(".bars").load("cities.php")
  });
</script>
<body>
    <div class="row">          
        <div class="bars col-md-10 m-3">

        </div>
        <div class="container m-3 col-md-2">
                <img src="images/graph.png" class="img_fluid" alt="">
        </div>
        <div class="col-md-1"></div>
    </div>
    <footer style="width:100%;">
            <div class="bg-success m-3">
                <div class="row">
                    <div class="col-md-4">                       
                        <h3>Follow us</h3>                      
                        <div class="icon">

                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-envelope-open"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Address</h3>
                        <i class="fa fa-map-marker"></i> &nbsp;&nbsp;&nbsp; Lira university<br>
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;lirauni.ac.ug@yahoo.com
                    </div>
                    <div class="col-md-4">                      
                        <h3>Objectives</h3>                        
                        <div>
                           <ul>
                               <li>Keep uganda clean</li>
                               <li>Ensure saftey of people</li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>