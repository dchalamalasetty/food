<?php
session_start();
include '../db.php';
if(!isset($_SESSION['unm'])){
  header("Location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Order Food ::ADMIN</title>


    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template --
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

   <?php 
        $user=$_SESSION['unm'];
        ?>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Order Food</a>
  
         
     
      <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>


       <!--<ul><b>User PNR: </b><strong> <?php echo $_SESSION['pnr']; ?><span class="caret"></span><li> </strong>-->
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Features</h1>
            
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <!--<form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
                </form>-->
                        <table class="table table-hover">
  <form action="login.php" method="post">
  <tbody>
          <tr>
      <th>Update Order Status:</th>
      <td><a href="updos.php" class="btn btn-primary">Update Status</a></td>
    </tr>
        <tr>
      <th>Add Train:</th>
      <td><a href="adtr.php" class="btn btn-primary">Add Train</a></td>
    </tr>
           <tr>
      <th>Add Train Stops:</th>
      <td><a href="adtrs.php" class="btn btn-primary">Add Train</a></td>
    </tr>
            <tr>
      <th>Add PNR:</th>
      <td><a href="adpnr.php" class="btn btn-primary">Add PNR</a></td>
    </tr>
       <tr>
      <th>Add Items:</th>
      <td><a href="adit.php" class="btn btn-primary">Add Items</a></td>

    </tr>
           <tr>
      <th>Remove Items:</th>
      <td><a href="remit.php" class="btn btn-primary">Remove Items</a></td>

    </tr>

  </tbody>
</form>
</table>
              </div>
            
          </div>
        </div>

      </div>
    </header>



    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
