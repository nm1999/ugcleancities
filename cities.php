
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="w3css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
</head>
<style>
    .progress .w3-animate-left{
        animation-duration:5s;
    }
    .cities{
        width:60%;
    }
</style>
<body>
    <div class=" w3-card-4 cities">  
        <div class="modal-header bg-primary">
             <h3>Concentration of plastics per city</h3>
        </div>
        <div class=" w3-container">               
            <div class="">
                <div class="city">
                    <p><b>Mbarara city</b></p>
                </div>
                <div class="city">
                    <div class="progress">
                        <div class="progress-bar w3-animate-left" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:52%">
                            <span class="">53% Complete</span>
                        </div>
                    </div>
            </div>
            <div class="variations container-fuild">
                <label for="">Masaka city</label>
                <div class="progress">                        
                    <div class="progress-bar w3-red w3-animate-left" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span>70%</span>
                    </div>
                </div>

                <label for="">Lira City</label>
                <div class="progress">                        
                    <div class="progress-bar w3-animate-left " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    <span>50%</span>
                    </div>
                </div>      
                <label for="">Gulu city</label>
                <div class="progress">                        
                    <div class="progress-bar  w3-animate-left" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:68%">
                    <span>68%</span>
                    </div>
                </div> 
                
                <label for="">Kampala city</label>
                <div class="progress">                        
                    <div class="progress-bar bg-success w3-animate-left " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:28%">
                    <span>28%</span>
                    </div>
                </div> 
           </div> 
        </div>
    </div>
</div>
</body>
</html>