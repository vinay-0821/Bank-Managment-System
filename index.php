<!-- the page displayed when customer is loggedd in -->
<?php
session_start();
if(!isset($_SESSION['userId'])){ header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Banking</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>
  
</head>
<body style="background:#94c8ff;background-size: 100%">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 <a class="navbar-brand" href="#">
    <img src="images/Untitled_design-removebg-preview.png" width="30" height="30" class="d-inline-block align-top" alt="">
   <!--  <i class="d-inline-block  fa fa-building fa-fw"></i> --><?php echo bankName; ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">  <a class="nav-link" href="accounts.php">Accounts</a></li>
      <li class="nav-item ">  <a class="nav-link" href="statements.php">Account Statements</a></li>
      <li class="nav-item ">  <a class="nav-link" href="transfer.php">Funds Transfer</a></li>
      <!-- <li class="nav-item ">  <a class="nav-link" href="profile.php">Profile</a></li> -->


    </ul>
    <?php include 'sideButton.php'; ?>
    
  </div>
</nav><br><br><br>
<div class="row w-100" >
  <div class="col" style="padding: 22px;padding-top: 0">
    <div class="jumbotron shadowBlack" style="padding: 15px;min-height: 327px;max-height: 187px">
  <h4 class="display-5">Welcome to NBC Bank</h4>
  <p  class="lead alert alert-warning"><b>Latest Notification:</b>

  <?php 
      $array = $con->query("select * from notice where userId = '$_SESSION[userId]' order by date desc");
      if ($array->num_rows > 0)
      {
        $row = $array->fetch_assoc();
        // {
          echo $row['notice'];
        // }
      }
      else
        echo "<div class='alert alert-info'>Notice box empty</div>";
     ?></p>
  
</div>
        <div id="carouselExampleIndicators" class="carousel slide my-2 rounded-1 shadowBlack" data-ride="carousel" >
          <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/virat.jpg" alt="First slide" style="max-height: 400px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/cromaad.png" alt="Second slide" style="max-height: 400px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/ad central (1).png" alt="Third slide" style="max-height: 400px">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
  <!-- <div class="container">
  <div class="my-2 rounded-1 shadowBlack">
    <img class="d-block w-150" src="images/adv_1.jpg" alt="Your Image" style="max-height: 350px">
  </div>
<br>
<br>
<br> -->
<div class="col">
    <div class="row" style="padding: 22px;padding-top: 2px">
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="images\personal-information.png" style="max-height: 256px;min-height: 286px" alt="Card image cap">
          <div class="card-body">
            <a href="accounts.php" class="btn btn-outline-info btn-block">Account Summary</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="images/3d-render-money-transfer-mobile-banking-online.jpg" alt="Card image cap" style="max-height: 256px;min-height: 286px">
        <div class="card-body">
          <a href="transfer.php" class="btn btn-outline-info btn-block">Transfer Money</a>
         </div>
        </div>
      </div>
    </div>
    <div class="row" style="padding: 22px;padding-top: 8px">
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="images/ting.gif" style="max-height: 280px;min-height: 256px" alt="Card image cap">
          <div class="card-body">
            <a href="notice.php" class="btn btn-outline-info btn-block">Check Notification</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="images/contact.jpg" alt="Card image cap" style="max-height: 280px;min-height: 256px">
        <div class="card-body">
          <a href="feedback.php" class="btn btn-outline-info btn-block">Contact Us</a>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>