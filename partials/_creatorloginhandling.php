<?php
$exist="false";
$method=$_SERVER['REQUEST_METHOD'];
// echo $method;
if($method=="POST")
{
        require '_dbconnect.php';
        $username=$_POST['username'];
        $pass=$_POST['password'];
        $sql="select * from `creator_signup` where `creator_username`='$username'";
        $result=mysqli_query($conn, $sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==1)
        {
            $row=mysqli_fetch_assoc($result);
            if(password_verify($pass,$row['password']));
            {
                session_start();
              $a= password_verify($pass,$row['password']);
              if($a==false)
              {
                $exist="false";
             }
              else
              {
                $exist="true";
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                $_SESSION['sno']=$row['creator_sno'];
                header("Location: /project/creatorpage.php?loginsuccess=$exist");
              }
             

            }
        }
        else
        {
            header("Location: /project/index.php?loginsuccess=$exist");
        }
}

?>
