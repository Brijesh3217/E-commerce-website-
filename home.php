<?php
  include 'components/connection.php';
  session_start();
  if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    }else{
    $user_id = '';
    }

    if(isset($_POST['logout'])){
      session_destroy();
      header("location: login.php");
    }
?>
<style type="text/css">
  <?php include 'style.css';?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Pramukh Electronics- home page</title>
</head>
<body>
  <?php include 'components/header.php'; ?>
  <div class="main">
    
    <section class="home-section">
    <div class="flex banner-area">
        <div class="col-6">
        <div class="banner-content">
          <span>Welcome To Pramukh Elecronics</span>
          <h2>
            Your Home 
            <br>   
            Smart Devices &amp; 
            <br>   
            Best Solution 
          </h2>
          <a href="view_products.php" class="btn">shop now</a>
       </div>	
       </div>
       <div class="col-6">
        <div class="banner-img">
          <img src="img/pngwing.com.png">
        </div>
      </div>
    </div>
    </section>
  
    <!-- home slider end-->
    <section class="thumb">
      <div class="box-container">
        <div class="box">
          <img src="img/img4.jpeg" src="button">
          <h3>tv</h3>
          <a href="view_category_product.php?id=9" class="button"><i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="box">
          <img src="img/download.jpeg">
          <h3>ac</h3>
          <a href="view_category_product.php?id=8" class="button"><i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="box">
          <img src="img/img7.jpeg">
          <h3>refrigerator</h3>
          <a href="view_category_product.php?id=10" class="button"><i class="fa-solid fa-angle-right"></i></a>
        </div>
        
        <div class="box">
          <img src="img/img11.jpeg">
          <h3>watch</h3>
          <a href="view_category_product.php?id=11" class="button"><i class="fa-solid fa-angle-right"></i></a>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="box-container">
        <div class="box">
          <img src="img/img12.jpeg">
          <span>watch</span>
          <h1>save up to 50% off</h1>
          <p>Best Quality and Best Price</p>
        </div>
      </div>
    </section>
    <section class="services" >
      <div class="box-container">
        <div class="box">
          <i class="fa-solid fa-piggy-bank"></i>
          <div class="detail">
            <h3>great savings</h3>
            <p>save big every order</p>
          </div>
        </div>
        <div class="box">
          <i class="fa-solid fa-gift"></i>
          <div class="detail">
            <h3>gift voucher</h3>
            <p>voucher on every festivals</p>
          </div>
        </div>
        <div class="box">
          <i class="fa-solid fa-truck-fast"></i>
          <div class="detail">
            <h3>worldwide delivery</h3>
            <p>dropship worldwide</p>
          </div>
        </div>
      </div>
    </section>
    
    <?php include 'components/footer.php'; ?>
  </div>
  <script src="script.js"></script>
  <?php include 'components/alert.php'; ?>

</body>
</html>