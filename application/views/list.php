<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show-user</title>
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
    .card {
      margin: 20px 20px 20px 100px;
    }
  </style>
</head>

<body>
    <br><br>
    <center>
      <h1>รายชื่อศิษย์เก่าทั้งหมด</h1>
    </center>
    <br><br>

    <a href="<?php echo base_url();?>index.php/welcome/logout">logout</a>
  
    <br>

<div class="container">
<?php foreach($query as $rs) {?>
 <div class="card w-75 h-100">
 
        <div class="card-body">
        
          <div class="row">

            <div class="col-4">
              <img src="<?php echo base_url('upload'); ?>/<?php echo $rs->image; ?>" alt="" width="180px" height="180px">
            </div>

            <div class="col-8">
              <h5 class="card-title">ชื่อ :<?php echo $rs->title; ?>  <?php echo $rs->fname; ?> <?php echo $rs->lname; ?></h5>
              <p class="card-text">อีเมลล์ : <td><?php echo $rs->email; ?></td></p>
              <p class="card-text">เฟสบุ๊ค : <td><?php echo $rs->face; ?></td></p>                       
            </div>

          </div> 

        </div>
  

      </div>

   <?php }?>   
      </div>
</body>

</html>