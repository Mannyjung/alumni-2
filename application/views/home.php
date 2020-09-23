<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register-software</title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <style>  
    .booder1 {
  border-bottom: 1px solid #A0A0A0;
  width: 750px;
  
}
.booder {
  border-bottom: 1px solid #A0A0A0;
  
}

    </style>
    <style>
#carouselExampleControls{
  margin: 50px 250px 50px 250px;
}
h1{
  margin: 20px 20px 20px 150px;
}
</style>
</head>
<body>
 <!-- header -->
 <div align="center">
 <img src="<?php echo base_url('img'); ?>/header1920px.png" width="100%">
 </div>
  <!-- header -->



    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">SE-NPRU</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">หน้าหลัก<span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <span class="navbar-text">
              <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/regis">ลงทะเบียนศิษย์เก่า</a>
              </span>
            <span class="navbar-text">
            <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/login">เข้าสู่ระบบ</a>
            </span>
          </div>
          </div>
        </nav>
        
        <!-- Nav -->
<br><br>

<h1>ภาพรวมกิจกรรม</h1>
    
<p></p>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2550">
      <img src="<?php echo base_url('img'); ?>/show2.jpg"class="d-block w-100" height="650" >
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('img'); ?>/show1.jpg" class="d-block w-100"height="650" >
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('img'); ?>/show3.jpg" class="d-block w-100" height="650">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

<p></p>

</body>
</html>
