<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>

    hr{
      height: 5%;
      width: 100%;
      color: 1px solid black;   
    }

    .card{
      margin: 0 auto; 
      margin-top: 50px;
      float: none;
      margin-bottom: 50px; 
      width: 25%;
      padding: 20px;
      border: 1px solid;
      padding: 5px;
      background-image: url("pics/6.png");
      background-size: cover;
      background-position: center;
      box-shadow: 5px 10px grey;
      color: black;
    }

    .card-title{
      text-align: center;
      font-family: monospaced;
      font-weight: bold;
      margin-bottom: 28px;
      margin-top: -10px;
      -webkit-text-fill-color: white;
      -webkit-text-stroke-width: 2px;
      -webkit-text-stroke-color: black;
      font-size: 30px;
    }

    b{
      color: #3399ff;
    }

    hr{
      height: 30vh ;
      border: 1px solid blue;
      width: 0px;
      margin-top: 20px;
      margin-bottom: -5px;
    }

    .card-body{
      padding-right: 1px;
      padding-left: 20px;
      padding-top: 30px;
      margin-bottom: 30px;
      font-size: 20px;
      font-family: monospaced;
    }

    .col{
      margin-top: -1px;
      padding: 25px;
      font-family: "Times New Roman", Times, serif;
      margin-bottom: 20px;
    }

    </style>

<body>

  <div class="card" style="width: 33rem;">
    <div class="card-body">
      6.<h5 class="card-title">Array of Strings</h5>
          <p class="card-text">

            <?php
            $str_arr = array("ice-cream", "crinkles", "cake", "croissant", "crinkles");
            echo "<div class='row align-items-start'>";
            echo "<div class='col'>Unsorted list with recurring elements:<br><br>";
            echo "&nbsp=>";
            foreach($str_arr as $value){
              echo ", $value";
            }

            echo "</div>";
            echo "<hr>";

            sort($str_arr);
            $arr = array_unique($str_arr);
          
            echo "<div class='col'>Sorted list without duplicated elements:<br><br>";
            echo "&nbsp=>";
            foreach($arr as $value){
              print_r(", $value");
            }
            echo "</div>";

              echo "</div>";
            ?>

          </p>
    </div>
  </div>
    
</body>
</html>