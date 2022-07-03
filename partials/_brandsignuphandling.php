<?php

$method=$_SERVER['REQUEST_METHOD'];
if($method=="POST")
{
    //connection to the database made
    require "_dbconnect.php";
    // insert users infromation into database
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $username=$_POST['username'];
    $exist="true";
    $existquerry="SELECT * FROM `brands_detail` where brand_email='$email'";
    $result=mysqli_query($conn,$existquerry);
    $numrows=mysqli_num_rows($result);
    if($numrows>0)
    {
        $exist="false";
              header("Location: /project/index.php?signupsuccess=$exist");
            }
    else
    { 
        $exist="true";
    }
    if(($password==$cpassword)&& $exist=="true")
    {
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `brands_detail` (`brand_username`, `brand_password`, `brand_email`, `timestamp`) VALUES ('$username', '$hash','$email', current_timestamp());";
        $result=mysqli_query($conn,$sql);
        echo var_dump($result);
        if($result)
        {
            
             header("Location: /project/index.php?signupsuccess=$exist");

        }
        else
        {
              header("Location: /project/index.php?signupsuccess=$exist");
        }

}
}

?>