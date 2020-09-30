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
    .card {
      margin: 20px 20px 20px 150px;
    }
  </style>
</head>

<body>

  <div class="container">
    <br><br><br>
  

   
    <h1 class="card-title">ข้อมูลส่วนตัว</h1>
    <div class="card w-75">
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <img src="<?php echo base_url('upload'); ?>/<?php echo $this->session->userdata('image'); ?>" alt="" width="180px" height="180px">
          </div>
          <div class="col-8">

            <h5 class="card-title">ชื่อ :<?php echo $this->session->userdata('title') . ' ' . $this->session->userdata('fname') . ' ' . $this->session->userdata('lname'); ?> </h5>
            <p class="card-text">อีเมลล์ : <?php echo $this->session->userdata('email'); ?></p>
            <p class="card-text">เฟสบุ๊ค : <?php echo $this->session->userdata('face'); ?></p>
            <p class="card-text">เพศ : <?php echo $this->session->userdata('sex'); ?></p>
            <p class="card-text">วันเกิด : <?php echo $this->session->userdata('date'); ?></p>
            <p class="card-text">เลขบัตรประชาชน : <?php echo $this->session->userdata('idcard'); ?></p>
            <p class="card-text">งาน : <?php echo $this->session->userdata('job'); ?></p>
            <p class="card-text">เบอร์โทรศัพท์ : <?php echo $this->session->userdata('tel'); ?></p>
        

     

          
          </div>
        </div>
      </div>
    </div>






</body>

</html>