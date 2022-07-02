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






    <!-- bootstrap script link start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- bootstrap script link ends -->

</body>

</html>