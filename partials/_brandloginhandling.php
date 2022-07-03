<?php
$exist="false";
$method=$_SERVER['REQUEST_METHOD'];
// echo $method;
if($method=="POST")
{
        require '_dbconnect.php';
        $username=$_POST['username'];
        $pass=$_POST['password'];
        $sql="select * from `brands_detail` where `brand_username`='$username'";
        $result=mysqli_query($conn, $sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==1)
        {
            $row=mysqli_fetch_assoc($result);
            if(password_verify($pass,$row['brand_password']));
            {
                session_start();
              $a= password_verify($pass,$row['brand_password']);
              if($a==false)
              {
                $exist="false";
             }
              else
              {
                $exist="true";
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                $_SESSION['brandsno']=$row['brand_no'];
                header("Location: /project/brandads.php?loginsuccess=$exist");
              }
             

            }
            if(!password_verify($pass,$row['brand_password']))
            {
                header("Location: /project/index.php?loginsuccess=$exist");
            }
        }
        else
        {
            header("Location: /project/index.php?loginsuccess=$exist");
        }
}

?>
