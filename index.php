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




<!-- image sliding start here -->

 <!-- caurseal start here -->

 <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="./images/1.jpg" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/2.jpg" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/3.jpg" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/4.jpg" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/5.jpg" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/5.jpg" class="d-block w-100" alt="..." height="500">
            </div>
        </div>

<!-- image sliding ends here -->


<div class="container my-4">

<h1 class="text-center" style="font-family: 'Titan One', cursive; text-shadow: 9px 0px 11px rgba(0,0,0,0.79);">CHOOSE FROM HERE</h1>


</div>















    <!-- <div class="container my-4 d-flex justify-content-between">


        <div class="creator" style="-webkit-box-shadow: 7px 9px 30px -6px rgba(143,70,143,1);
-moz-box-shadow: 7px 9px 30px -6px rgba(143,70,143,1);
box-shadow: 7px 9px 30px -6px rgba(143,70,143,1); height:600px; width:450px">
            <div class="image">
            <img src="images/creator.avif" alt="Image not availaible in your browser" height="80%" width="450px">
            </div>

            <div class="btns">
                <button class="btn btn-outline-warning">login</button>
            </div>
        </div>

        <div class="ads" style="box-shadow: 7px 9px 30px -6px rgb(143 70 143); height:600px; width: 450px">
            <img src="images/brand.png" alt="image not availaible in your browswer" height="80%" width="450px">
        </div>

    </div> -->



    <div class="container">
        <div class="row" >
            <div class="col-md-6 my-4">
                <div class="card" style="width: 20rem; box-shadow: 7px 9px 30px -6px rgb(143 70 143); margin:auto">
                    <img src="images/brand.png" class="card-img-top" alt="..." height="350px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Are you a Brand</h4>
                        <p class="card-text text-center">Login here to upload Ads</p>
                        <div class="buttons d-flex justify-content-around">
                        <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#login_Modal" >Login</a>
                        <a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signup_Modal" >signup</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-4">
                <div class="card" style="width: 20rem; box-shadow: 7px 9px 30px -6px rgb(143 70 143); margin: auto">
                    <img src="images/creator.avif" class="card-img-top" alt="..." height="350px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Are you a Creator</h4>
                        <p class="card-text text-center">Login here to see ads</p>
                            <div class="buttons d-flex justify-content-around">
                        <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#loginModal" >Login</a>
                        <a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal" >signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include"partials/_creatorsignupmodal.php" ?>
<?php include"partials/_brandsignupmodal.php" ?>
<?php include"partials/_creatorloginmodal.php" ?>
<?php include"partials/_brandloginmodal.php" ?>
    <!-- bootstrap script link start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- bootstrap script link ends -->

</body>

</html>