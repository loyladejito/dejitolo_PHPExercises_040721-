<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="card">
      4.<div class="card-header">
            <h5 class="card-title">Determine if number is Armstrong Number</h5>
        </div>
                <div class="card-body">
                    <p class="card-text">

                        <?php  
                            $num = 153;
                                echo "<br><b> Number : &nbsp&nbsp&nbsp </b> $num <br><br>";    
                            $total=0;  
                            $an=$num;

                            while($an>0){  
                                $r=$an%10;  
                                $total=$total+$r*$r*$r;  
                                $an=$an / 10;  
                            }  
                            
                            if($num==$total){  
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Armstrong number.";  
                            }else{  
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Not an armstrong number.";  
                            }  
                        ?> 

                    </p>

                </div>
     </div>
</body>

<style>

    .card{
        margin: 0 auto; 
        margin-top: 100px;
        float: none;
        margin-bottom: 50px; 
        width: 30%;
        padding: 20px;
        border: 1px solid;
        padding: 10px;
        background-color: lavender;
        box-shadow: 5px 10px black;
    }

    .card-title{
        text-align: center;
        font-family: monospaced;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 28px;
        margin-top: -35px;
        -webkit-text-fill-color: #cc4400;
        -webkit-text-stroke-width: 2px;
        -webkit-text-stroke-color: black;
    }
        
    .card-text{
        font-family: monospaced;
        font-size: 20px;
    }

    b{
        color: blue;
    }

    .card-header{
        border:none;
        height: 20px;
        width: 100%;
        height: 50px;
        border-bottom: 1px solid #1f1209;
        box-shadow: 0 20px 20px -20px #333;
    }
    
</style>

</html>