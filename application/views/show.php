<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <?php foreach ($query as $rs) { ?>
      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-4">
              <img src="<?php echo base_url('upload'); ?>/<?php echo $rs->image; ?>" alt="" width="180px" height="180px">
            </div>

            <div class="col-8">
              <h5 class="card-title">ชื่อ :<?php echo $rs->title; ?> <?php echo $rs->fname; ?> <?php echo $rs->lname; ?></h5>
              <p class="card-text">อีเมลล์ : <td><?php echo $rs->email; ?></td>
              </p>
              <p class="card-text">เฟสบุ๊ค : <td><?php echo $rs->face; ?></td>
              </p>
            </div>

          </div>

        </div>


      </div>
      <br>
    <?php } ?>
  </div>
</body>
</html>