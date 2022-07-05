<?php
include "partials/_dbconnect.php";
$method=$_SERVER['REQUEST_METHOD'];
$exist="true";
if($method=='POST')
{session_start();
    // $sno=$_POST['sno'];
    $name=$_POST['naam'];
    $name=str_replace("<","&lt",$name);
  $name=str_replace(">","&gt",$name);
    // $pass=$_POST['pass'];
    $file=$_FILES['foto'];
$details=$_POST['detail'];
$details=str_replace("<","&lt",$details);
$details=str_replace(">","&gt",$details);
    $username=$_SESSION['username'];
$id=$_POST['ad_id'];
    // echo var_dump($file);
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    if($fileerror==0){
        $destfile='upload/'.$filename;
        move_uploaded_file($filepath,$destfile);

        $sql="INSERT INTO `creator_details` (`creator_name`, `creator_username`, `image`, `details`, `ad_id`, `a_id`, `timestamp`) VALUES ('$name', '$username', '$destfile', '$details', '$id', '$id', current_timestamp());";
        $result=mysqli_query($conn, $sql);
        if($result){
            echo"data inserted successfully";
            
            header("location: creatorpage.php?insert=$exist");
        }
        else
        {$exist-"false";
            echo "data inserted is failed";
            header("location: creatorpage.php?insert=$exist");


        }

    }
}
?>