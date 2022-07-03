<?php
include "partials/_dbconnect.php";
$method=$_SERVER['REQUEST_METHOD'];

if($method=='POST')
{session_start();
    // $sno=$_POST['sno'];
    $name=$_POST['naam'];
    // $pass=$_POST['pass'];
    $file=$_FILES['foto'];
$details=$_POST['detail'];
    $username=$_SESSION['username'];
$id=$_POST['ad_id'];
    // echo var_dump($file);
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    if($fileerror==0){
        $destfile='upload/'.$filename;
        move_uploaded_file($filepath,$destfile);

        $sql="INSERT INTO `creator_details` (`creator_name`, `creator_username`, `image`, `details`, `ad_id`, `timestamp`) VALUES ('$name', '$username', '$destfile', '$details', '$id',  current_timestamp());";
        $result=mysqli_query($conn, $sql);
        if($result){
            echo"data inserted successfully";
            
            // header('location: showdata.php');
        }
        else
        {
            echo "data inserted is failed";
        }

    }
}
?>