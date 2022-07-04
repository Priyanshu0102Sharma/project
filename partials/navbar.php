<?php

// navbar start here
session_start();

echo '<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
         </li>
         
         </ul>';

         if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'])==true ){
         echo '<div class="logout d-flex justify-content-right">
         <a href="partials/_logouthandling.php" class="btn btn-outline-warning">LOG OUT</a>

       </div>';
         }
      echo '  </div>
  </div>
</nav>';

// navbar ends here

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
{
  echo '<div class="alert alert-success alert-dismissible" role="alert">
              <strong>SUCCESS ! </strong> you have signed up!! You can Login now <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
}
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false")
{
  echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <strong>ERROR!</strong> Username is already taken <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
}

if(isset($_GET['loginsuccess']) && $_GET ['loginsuccess']=="false")
{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failure!</strong> You were not able to login because password didn\'t match or username already taken!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['loginsuccess']) && $_GET ['loginsuccess']=="true")

{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You have logged in!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['insert']) && $_GET ['insert']=="true")

{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Data inserted succesfully, Do not add data twice on the same adv!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['insert']) && $_GET ['insert']=="false")

{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Something Went Wrong!</strong> Error occur data is not inserted!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>
