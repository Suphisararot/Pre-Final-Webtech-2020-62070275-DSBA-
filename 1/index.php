<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <style>
        .card {
            border: none;
        }
        p {
            margin-bottom: 2px;
        }
    </style>
</head>
<?php
$url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
$result = json_decode($response);
?>
<div class="container bcontent">
    <?php 
    for ($i=0; $i < sizeof($result) ; $i++) { 
    
    ?>
        <div class="card" style="width: 1030px; height: 300px; margin: auto; margin-top: 3rem; margin-bottom: 1rem;" >
            <div class="row no-gutters">
                <div class="col-sm-7">
                    <div class="card-body">
                    <div class="col-sm-5">
                    <img class="card-img" style="height:200px"src=<?php echo $result[$i]->images; ?> alt="">
                </div>
                        <p class="card-text"><?php echo "<b> Artist: </b>".$result[$i]->name; ?></p>
                        <p class="card-text"><?php echo "<b> Release date: </b>".$result[$i]->release_date; ?></p>
                        <p class="card-text"><?php echo "<b> Avaliable: </b>".$result[$i]->available_markets; ?></p>

                        foreach ($result[$i]->borders as &$value) {
                            echo $value." ";
                        }
                         ?></p>
                    </div>
                </div>
                
            </div>
        </div>
                    <?php }?>
    </div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>