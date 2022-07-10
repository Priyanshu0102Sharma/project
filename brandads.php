<!-- INSERT INTO `brandads` (`ad_id`, `ad_title`, `ad_content`, `timestamp`) VALUES ('1', 'Nachos Advertisement', 'Nachos is a company famous for producing nachos.', current_timestamp()); -->

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
    @import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
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


    <div class="container">
        <h1 class="text-center" style="font-family: 'Secular One', sans-serif; text-shadow: 9px 0px 11px rgba(0,0,0,0.79);">
            Fill this form for publishing Advertisements</h1>
            
            <!-- form for ads start -->



    <form action="brandads.php" method="post">
        <div class="mb-3">
            <label for="adtitle" class="form-label">Enter title of your Ad</label>
            <input type="text" class="form-control" id="Adtitle" name="Adtitle" aria-describedby="emailHelp">

        <div class="mb-3">
            <label for="Adcontent" class="form-label my-2">Enter Content of your Ad</label>
            <textarea class="form-control" id="Adcontent" name="Adcontent" rows="5"></textarea>
        </div>
        <div class="button d-flex justify-content-center">
        <button type="submit" class="btn btn-dark" >Submit</button> </div>
    </form>

    <!-- form for ads ends -->

<!-- insertion of form to database begins-->

<?php
$brandsno=$_SESSION['brandsno'];
$method=$_SERVER['REQUEST_METHOD'];
if($method=='POST')
{
    $adtitle=$_POST['Adtitle'];
    $adcontent=$_POST['Adcontent'];
    $adcontent=str_replace("<","&lt",$adcontent);
  $adcontent=str_replace(">","&gt",$adcontent);
    $adtitle=str_replace("<","&lt",$adtitle);
  $adtitle=str_replace(">","&gt",$adtitle);

    $sql="INSERT INTO `brandads` (`ad_id`, `ad_title`, `ad_content`, `brand_id`, `timestamp`) VALUES ('$brandsno', '$adtitle', '$adcontent', '0', current_timestamp());";
    $result=mysqli_query($conn,$sql);

}


?>

<!-- insertion of form to database ends -->



    <h1 class="text-center my-5" style="font-family: 'Secular One', sans-serif; text-shadow: 9px 0px 11px rgba(0,0,0,0.79);">Your Advertisement</h1>


<?php
$brandsno=$_SESSION['brandsno'];
$sql="SELECT * FROM `brandads` where `ad_id`='$brandsno'";
$result=mysqli_query($conn, $sql);
// echo var_dump($result);
$numrows=mysqli_num_rows($result);
if($numrows==0){
    echo'<div class="container mt-3 my-3">
    <div class="mt-4 p-5 bg-dark text-center text-white rounded">
      <h1>No advertisement to display</h1> 
      <p>It seems you haven\'t created a advertisement yet </p> 
    </div>
  </div>';
}
else{
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
    <a href="creatorlist.php?advid='. $brandsno.'" class="btn btn-outline-warning">Display the list of creator</a>
    </div>
  </div>
</div>
';
}    
}
?>

</div>






    <!-- bootstrap script link start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- bootstrap script link ends -->

</body>

</html>