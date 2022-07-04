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

<!-- data table css link -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

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

    <style>
        table, th, td {
  border: 1px solid;
}

#myTable_filter input{
    border: 2px solid black;
    margin:3px;
}
#myTable_length select{
    border: 2px solid black;

}
    </style>

</head>

<body>

    <!-- connect to database -->
    <?php require "partials/_dbconnect.php" ?>
    <!-- connect to database -->

    <!-- navabar links start -->
    <?php require "partials/navbar.php" ?>
    <!-- navbar links end -->

    <div class="container my-3 text-dark">


<!-- table start here -->
<table class="table" id="myTable" >
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $id=$_SESSION['brandsno'];
    // selecting/displaying querry
    $sql="SELECT * FROM `creator_details` where `ad_id`='$id'";
    $result=mysqli_query($conn,$sql);
// find number or rows
$num= mysqli_num_rows($result);
if($num>0)
{
$sno=0;
while($row=mysqli_fetch_assoc($result))
{   
   ++$sno;
    echo "  <tr>
    <th scope='row'>".$row['creator_name']."</th>
    <td>".$row['creator_username']."</td>
    <td>".$row['details']."</td>
    <td><img src='".$row['image']."' width='200'></td>
  </tr>";
}
}
else{
    echo'
  
    <div class="container mt-3 my-3">
      <div class="mt-4 p-5 bg-dark text-center text-white rounded">
        <h1>No data to display</h1> 
        <p>It seems that no one has register for your ad yet</p> 
        <hr class="my-4">
      </div>
    </div>
    '; 
}

?>




  </tbody>
</table>
<!-- table ends here -->
</div>


    <!-- bootstrap script link start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- bootstrap script link ends -->


      <!-- jquerry link -->

      <script src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- data table js link -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>



    <script>
      $(document).ready(function () {
        $('#myTable').DataTable();
      });
    </script>

</body>

</html>