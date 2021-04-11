<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>JSON data</title>
</head>

    <style>

        body{
            color: white;
        }

        hr{
            height: 5%;
            width: 100%;
            color: 1px solid black;
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
            box-shadow: 5px 10px grey;
            background-image: url("pics/4.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; 
        }

        .card-title{
            text-align: center;
            font-family: monospaced;
            font-weight: bold;
            margin-bottom: 20px;
            -webkit-text-fill-color: white;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #b30086;
            font-size: 30px;
        }

        b{
            color: yellow;
        }

        .container{
            border: 1px solid;
            background: black;
            background-size: cover;
            opacity: 0.5;
        }

    </style>

<body>

    <div class="card">
        <div class="card-body">
            1.<h5 class="card-title">JSON DATA</h5>
            <p class="card-text">

                <?php
                    $json_data = '[
                        {
                        "name" : "John Garg",
                        "age"  : "15",
                        "school" : "Ahlcon Public school"
                        },
                        {
                        "name" : "Smith Soy",
                        "age"  : "16",
                        "school" : "St. Marie school"
                        },
                        {
                        "name" : "Charle Rena",
                        "age"  : "16",
                        "school" : "St. Columba school"
                        }
                    ]';
                    
                    $arr = json_decode($json_data, true); 
                ?>

                <div class="container">

                   <?php
                        foreach($arr as $value){
                            echo "<b>Name &nbsp&nbsp:&nbsp&nbsp </b>" . $value["name"] . "<br>";
                            echo "<b>Age &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp </b>" . $value["age"] . "<br>";
                            echo "<b>School &nbsp:&nbsp&nbsp </b>" . $value["school"] . "<br>";
                            echo "<hr>";
                        };
                    ?>
                    
                </div>
            </p>
        </div>
    </div>
    
</body>
</html>