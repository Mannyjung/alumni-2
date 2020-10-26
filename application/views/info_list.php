<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <?php foreach ($query->result_array() as $rs) { ?>
      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-4">
              <img src="<?php echo base_url('upload'); ?>/<?php echo $rs['image']; ?>" alt="" width="200px" height="230px">
            </div>

            <div class="col-8">
              <h2 style="color:blue;">ข้อมูลส่วนตัว</h2>
              <p class="card-title">ชื่อ :<?php echo $rs['title']; ?> <?php echo $rs['fname']; ?> <?php echo $rs['lname']; ?></p>
              <p class="card-text">อีเมลล์ : <td><?php echo $rs['email']; ?></td>
              </p>
              <p class="card-text">เฟสบุ๊ค : <td><?php echo $rs['face']; ?></td>
              </p>
              <p class="card-text">รหัสนักศึกษา : <td><?php echo $rs['idstd']; ?></p>
              <p class="card-text">หมู่เรียน : <td><?php echo $rs['sec']; ?></p>
              <p class="card-text">วันเกิด : <td><?php echo $rs['date']; ?></p>
              <p class="card-text">เพศ : <td><?php echo $rs['sex']; ?></p>
              <p class="card-text">อาชีพ : <td><?php echo $rs['job']; ?></p>
              <p class="card-text">เบอร์ : <td><?php echo $rs['tel']; ?></p>
              <p class="card-text">ปีที่เข้ารับการศึกษา : <td><?php echo $rs['attend']; ?></p>
              <p class="card-text">ปีเข้าที่จบการศึกษา : <td><?php echo $rs['finish']; ?></p>

              


            </div>
          </div>
          <div style="margin-left:5%">
              <h2 style="color:blue;">ข้อมูลการทำงาน</h2>
              <p class="card-text">บ้านเลขที่ : <td><?php echo $rs['Work-No']; ?></p>
              <p class="card-text">หมู่ : <td><?php echo $rs['Moo-work']; ?></p>
              <p class="card-text">จังหวัด : <td><?php echo $rs['Province-work']; ?></p>
              <p class="card-text">อำเภอ : <td><?php echo $rs['Area-work']; ?></p>
              <p class="card-text">ตำบล : <td><?php echo $rs['Sub-area-work']; ?></p>
              <p class="card-text">รหัสไปรษณีย์ : <td><?php echo $rs['Postal-Code-work']; ?></p>
              <p class="card-text">เบอร์ติดต่อที่ทำงาน : <td><?php echo $rs['Tel-work']; ?></p>
        </div>
    </div>

      </div>
      <br>
    <?php } ?>
  </div>
</body>
</html>