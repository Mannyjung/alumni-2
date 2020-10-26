<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show-user</title>
<!-- CSS only -->

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
            <img src="<?php echo base_url('upload'); ?>/<?php echo $this->session->userdata('upload'); ?>" alt="" width="180px" height="180px">
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
            <?php foreach ($query->result_array() as $rs) { ?>
            
            <p class="card-text">ปีที่เข้ารับการศึกษา : <td><?php echo $rs['attend']; ?></p>
            <p class="card-text">ปีเข้าที่จบการศึกษา : <td><?php echo $rs['finish']; ?></p>
            <?php } ?>
        <div align="right">
            <a class="btn btn-secondary" href=" <?php echo site_url('Welcome/editprofile'); ?>">แก้ไข</a>
     </div>

          
          </div>
     
        </div>
      </div>
    </div>


    </div>




</body>

</html>