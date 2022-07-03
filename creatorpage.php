<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap css link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- bootstrap css link ends -->

    <!-- font family -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Titan+One&display=swap');
    </style>


    <!-- background start css -->
    <style>
    body {
        background: linear-gradient(-45deg, #F2EEE3, #E9D1D0, #FAE0BA, #EB8C73, #F0DED1, #DEC4A7);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
    </style>
    <!-- background ends -->
</head>

<body>

    <!-- connect to database -->
    <?php require "partials/_dbconnect.php" ?>
    <!-- connect to database -->

    <!-- navabar links start -->
    <?php require "partials/navbar.php" ?>
    <!-- navbar links end -->


    <h1 class="text-center my-5" style="font-family: 'Secular One', sans-serif; text-shadow: 9px 0px 11px rgba(0,0,0,0.79);">Find the suitaible advertisement for you</h1>


    <?php

$sql="SELECT * FROM `brandads`";
$result=mysqli_query($conn, $sql);
// echo var_dump($result);
while($row=mysqli_fetch_assoc($result))
{
    $adtitle=$row['ad_title'];
    $id=$row['ad_id'];
    $adcontent=$row['ad_content'];

echo'
  
<div class="container mt-3 my-3">
  <div class="mt-4 p-5 bg-dark text-center text-white rounded">
    <h1>'.$adtitle.'</h1> 
    <p>'.$adcontent.'</p> 
    <hr class="my-4">
    <div class="button">
    
    <a href="applynow.php?bid='. $id.'" class="btn btn-primary">Apply now</a>

    </div>
  </div>
</div>
';
}    

?>


    <!-- bootstrap script link start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- bootstrap script link ends -->

</body>

</html>