<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
  <h1>รายชื่อศิษย์เก่าจากการค้นหา</h1>
    <?php foreach ($query->result_array() as $rs) { ?>
      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-4">
              <img src="<?php echo base_url('upload'); ?>/<?php echo $rs['image']; ?>" alt="" width="200px" height="180px">
            </div>

            <div class="col-8">
              <h5 class="card-title">ชื่อ :<?php echo $rs['title']; ?> <?php echo $rs['fname']; ?> <?php echo $rs['lname']; ?></h5>
              <p class="card-text">อีเมลล์ : <td><?php echo $rs['email']; ?></td>
              </p>
              <p class="card-text">เฟสบุ๊ค : <td><?php echo $rs['face']; ?></td>
              </p>
           
              <p class="card-text">วันเกิด : <td><?php echo $rs['date']; ?></p>
              <p class="card-text">ปีที่เข้าการศึกษา : <td><?php echo $rs['attend']; ?></p>
              <?php if ($this->session->userdata('email')) { ?>
                <form action="<?php echo base_url('index.php/info_c/info_list'); ?>" method="post">
                  <input type="hidden" name="id" value="<?php echo $rs['a_id']; ?>">
                  <div align="right">
                  <button class="btn btn-deep-orange" name="submit">ดูรายละเอียด</button>
                  </div>
                </form>
              <?php } else {
              } ?>
            </div>

          </div>

        </div>


      </div>
      <br>
    <?php } ?>
  </div>
</body>
</html>