<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show-user</title>
  <!-- CSS only -->

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

  


  <div class="container">
    <?php foreach ($query as $rs) { ?>
      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-4">
              <img src="<?php echo base_url('upload'); ?>/<?php echo $rs->image; ?>" alt="" width="180px" height="180px">
            </div>

            <div class="col-8">
              <h5 class="card-title">ชื่อ :<?php echo $rs->title; ?> <?php echo $rs->fname; ?> <?php echo $rs->lname; ?></h5>
              <p class="card-text">อีเมลล์ : <td><?php echo $rs->email; ?> </p>
              <p class="card-text">เฟสบุ๊ค : <td><?php echo $rs->face; ?></p>
              <p class="card-text">วันเกิด : <td><?php echo $rs->date; ?></p>
              
            </div>

          </div>

        </div>


      </div>

    <?php } ?>
  </div>
</body>

</html>