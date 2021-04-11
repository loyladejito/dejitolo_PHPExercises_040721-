<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Best Deal to Purchase</title>
</head>

    <style>

        hr{
            height: 5%;
            width: 100%;
            border: 1px solid black;
        }

        .card {
            margin: 0 auto; 
            margin-top: 50px;
            float: none;
            margin-bottom: 50px; 
            width: 29%;
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px;
            background-image: url("pics/3.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; 
        }
        
        .card-title{
            text-align: center;
            font-family: monospaced;
            font-weight: bold;
            margin-bottom: 20px;
            color: #b30086;
            font-size: 20px;
            margin-top: -3px;
        }

        b{
            color: #3399ff;
        }

        .col{
            margin-top: -1px;
            border: #cdcdcd medium solid;
            padding: 25px;
            font-family: "Times New Roman", Times, serif;
            margin-bottom: 20px;
        }

        Strong{
            font-size: 15px;
        }

        div.card-body{
            padding-left: 30px;
            padding-right: 30px
        }

        h5{
            margin-top: 10px;
        }

        .container{
            border: 1px solid;
            background-color: grey;
            opacity: 0.3px;
            color: white;
        }

    </style>

<body>

    <div class="card">
        <div class="card-body">
            2.<h5 class="card-title">FINDING THE BEST DEAL TO PURCHASE AN ITEM.</h5>
                <p class="card-text">

                    <?php
                        $quantity1 = 70;
                        $quantity2 = 100;
                        $price1 = 35;
                        $price2 = 30;

                        $item1 = $price1 / $quantity1;
                        $item2 = $price2 / $quantity2;

                        echo "Best deal to purchase for an item is calculted through Price over Quantity.";

                        echo "<div class='row align-items-start'>";

                        echo "<div class='col'><strong>&nbsp&nbsp&nbsp --ITEM 1-- </strong> <br>";
                        echo "'quantity1' : " . $quantity1 . "<br>";
                        echo "'price1' &nbsp&nbsp&nbsp&nbsp
                         : " . $price1 . "<br><hr>Item 1 = $item1 </div>";

                        echo "<div class='col'><strong>&nbsp&nbsp&nbsp --ITEM 2-- </strong><br>";
                        echo "'quantity2' &nbsp: " . $quantity2 . "<br>";
                        echo "'price2' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " . $price2 . "<br><hr>Item 2 = $item2</div>";

                        echo "<hr>";
                    ?>

                    <div class="container">

                        <?php
                            if ($item1 > $item2) {
                                echo "<h5>The first item is the best deal to purchase!<h5>";
                            } else {
                                echo "<h5>The second item is the best deal to purchase!</h5>";
                            }
                        ?>
                        
                    </div>
                </p>
        </div>
    </div>

</body>
</html>