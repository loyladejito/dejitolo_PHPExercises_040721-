<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

  <style>

    body {
      padding: 14px;
      text-align: center;
      color: MediumBlue;
    }

    table{
      border-collapse: collapse;
      width: 50vw;
      height: 50vh;
      margin: auto;
      table-layout: auto;
      text-align: center;
      margin-top: -45%;
      margin-bottom: auto;
      border:3px solid #661aff;
      box-shadow: 0 5px 9px 0 black, 0 6px 20px 0 black;
      background-color: white;
      margin-left: 10%;
    }

    tr{
      font-size: 20px;
      color: black;
    }

    th{
      font-size: 25px;
      width: 50vw ;
      background-color: black;
      color: white;
    }

    .container{
      border: 1px solid grey;
      width: 60%;
      height: 70vh;
      margin: auto;
      border:3px solid black;
      box-shadow: -7px 5px grey;
      background-image: url(https://i.pinimg.com/originals/35/a0/a5/35a0a57c0b7d7648fab5c3d22dafee50.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      margin-top: 30px;
    }

    h2{
      color:  #e6005c;
      writing-mode: vertical-rl;
      text-orientation: upright;
      padding: 45px 5px 5px 5px;
      margin-top: -55%; 
    }

    .hr{
      border-left: 2px solid #993300;
      margin-left: 60px;
      margin-top: 30px;
      height: 60vh;
      width: 0px
    }

  </style>

<body>

  <div class="container">
    <hr class="hr">
      <h2> DIVISION TABLE </h2>
        <center>
          <table border=1>

            <?php
              $Numstart = 1;
              $Numend = 10;

              print("<tr>");
              print("<th> 0 </th>");

                for ($count1 = $Numstart; $count1 <= $Numend; $count1++)
                  print("<th> $count1 </th>");
                  print("</tr>");

              for ($count1 = $Numstart; $count1 <= $Numend; $count1++){
                print("<tr><th> $count1 </th>");

                for ($count2 = $Numstart; $count2 <= $Numend; $count2++){
                  $result = $count1 / $count2;

                  printf("<td> %.2f </td>", $result);
                }

                print("</tr>\n");
              }      
            ?> 

          </table>
        </center>
   </div>

</body>
</html>