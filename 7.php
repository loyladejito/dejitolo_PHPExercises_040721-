<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="card" style="width: 33rem;">
    <div class="card-body">
      7.<h5 class="card-header">Number Conversion to Words</h5>
          <p class="card-text">

            <?php
            
          if (isset($_POST['submit'])) {
                                    
                    if (empty($_POST["number"])) {
                      echo "<h5 style='color:cyan;font-family: monospaced;'>No inputted number! </h5>";

                    }else{ 

                        $numWordArr = array(
                            0 =>"ZERO",
                            1 => "ONE",
                            2 => "TWO",
                            3 => "THREE",
                            4 => "FOUR",
                            5 => "FIVE",
                            6 => "SIX",
                            7 => "SEVEN",
                            8 => "EIGHT",
                            9 => "NINE"
                        );

                        $str = $_POST["number"];
                        $length = strlen($str);
                        $thisWordCodeVerdeeld = array();

                        
                        for ($ndx = 0; $ndx < $length; $ndx++) {
                            $strnum[$ndx] = $str[$ndx];
                            foreach ($numWordArr as $key => $value) {
                                $intNum = $strnum[$ndx];
                                
                                if($intNum == $key ){
                                    echo  $value . " " ;
                                }
                                
                            }
                        } 

                    }
                        
                }

              
                             
            ?>
        
                      
              <form method="post">
                <table border="0" align="center">
                  <tr>
                    <td><input type="text" name="number" class="num" value= "<?php if(isset($str)){echo $str;};?>" placeholder="Enter a number" style="width: 25vw; margin-bottom: 15px;"/></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center">
                      <input type="submit" value="Convert Number to Words" name="submit" class="btn btn-primary" style="border-radius: 6px"/>
                    </td>
                  </tr>
                </table>
                  <button class="restart btn btn-light">Restart</button>
              </form> 
          </p>
    </div>
  </div>

</body>



<style>
  body{
    color: white;
  }

  .card-header{
    border:none;
    height: 20px;
    width: 100%;
    height: 50px;
    margin-top: 55px;
    border-bottom: 1px solid white;
    box-shadow: 0 20px 20px -20px #333
  }

  .card {
    
    margin: 0 auto; 
    margin-top: 100px;
    float: none;
    margin-bottom: 50px; 
    width: 25%;
    padding: 20px;
    border: 1px solid;
    padding: 10px;
    background-image: url("pics/bg.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; 
  }

  .card{
    box-shadow: 5px 10px grey;
  }

  .card-header{
    text-align: center;
    font-family: monospaced;
    font-weight: bold;
    margin-top: -30px;
    margin-bottom: 20px;
    -webkit-text-fill-color: white;
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;
    font-size: 30px;
  }

  b{
    color: #3399ff;
  }

  table{
    margin-top: 60px;
  }

  .num{
    height: 8vh;
    border-radius: 10px;
    font-size: 20px;
  }
  
</style>

<script>

  $(document).ready(function () {
    $(".restart").on("click", function () {    
      location.reload();
    });
  });

</script>

</html>