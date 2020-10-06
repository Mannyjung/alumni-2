<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <br><br><br>

       

        <form method="POST" action="<?php echo site_url('manage_alumni/edit_alumni');?>">
            <div class="container" style="color: blue;">
                <h3>แก้ไขข้อมูลส่วนตัว</h3>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="title">คำนำหน้า</label>
                    <select id="title" class="form-control" name="title">
                        <option selected><?php echo $this->session->userdata('title'); ?></option>
                        <option>นาย</option>
                        <option>นาง</option>
                        <option>นางสาว</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="fname">ชื่อ</label>
                    <input type="text" class="form-control" id="fname" placeholder="ชื่อ(ภาษาไทย)" name="fname" value="<?php echo $this->session->userdata('fname'); ?>">
                </div>
                <div class="form-group col-md-5">
                    <label for="lname">นามสกุล</label>
                    <input type="text" class="form-control" id="lname" placeholder="นามสกุล(ภาษาไทย)" name="lname" value="<?php echo $this->session->userdata('lname'); ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="idcard">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" id="idcard" placeholder="x-xxxx-xxx-xx-xx-x" name="idcard" maxlength="13" value="<?php echo $this->session->userdata('idcard'); ?>" readonly>
            </div>
            <div class="form-row">

                <div class="form-group">
                    <label for="select-sex">เพศ</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value="ชาย">
                        <label class="custom-control-label" for="customRadioInline1">ชาย</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="หญิง">
                        <label class="custom-control-label" for="customRadioInline2">หญิง</label>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="date">วัน/เดือน/ปี เกิด</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $this->session->userdata('date'); ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="job">อาชีพ/ตำแหน่งงาน</label>
                    <input type="text" class="form-control" id="job" name="job" placeholder="อาชีพ/ตำแหน่งงาน" value="<?php echo $this->session->userdata('job'); ?>">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Tel">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="xx-xxx-xxxx" maxlength="10" value="<?php echo $this->session->userdata('tel'); ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="Facebook">Facebook</label>
                    <input type="text" class="form-control" id="face" name="face" value="<?php echo $this->session->userdata('face'); ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail(ใช้เพื่อเข้าสู่ระบบ)</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@exam.com" value="<?php echo $this->session->userdata('email'); ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $this->session->userdata('password'); ?>">
                </div>
            </div>
            <p></p>
            
            <!-- <div class="container" style="color: blue;">
                <h3>ที่อยู่ปัจจุบันที่สามารถติดต่อได้</h3>
            </div><br>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="House-No">บ้านเลขที่</label>
                    <input type="text" class="form-control" id="House-No" name="House-No" value="<?php echo $this->session->userdata('House-No'); ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="Moo-home">หมู่บ้าน</label>
                    <input type="text" class="form-control" id="Moo-home" name="Moo-home" value="<?php echo $this->session->userdata('Moo-home'); ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="road">ถนน</label>
                    <input type="text" class="form-control" id="road-home" name="road-home" value="<?php echo $this->session->userdata('road-home'); ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Province">จังหวัด</label>
                    <input type="text" class="form-control" id="Province-home" name="Province-home" value="<?php echo $this->session->userdata('Province-home'); ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="Area">เขต/อำเภอ</label>
                    <input type="text" class="form-control" id="Area-home" name="Area-home" value="<?php echo $this->session->userdata('Area-home'); ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="Sub-area">แขวง/ตำบล</label>
                    <input type="text" class="form-control" id="Sub-area-home" name="Sub-area-home" value="<?php echo $this->session->userdata('Sub-area-home'); ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Postal-Code">รหัสไปรษณีย์</label>
                    <input type="text" class="form-control" id="Postal-Code-home" name="Postal-Code-home" maxlength="5" value="<?php echo $this->session->userdata('Postal-Code-home'); ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="Tel-home">เบอร์โทรศัพท์(ถ้ามี)</label>
                    <input type="text" class="form-control" id="Tel-home" name="Tel-home" placeholder="xx-xxx-xxxx" maxlength="10" value="<?php echo $this->session->userdata('Tel-home'); ?>">
                </div>

            </div> -->
            <br> <br>
<input type="hidden" name="a_id" value=" <?php echo $this->session->userdata('a_id'); ?>">
            <div class="container">
                <div align="right">
                   <button type="submit" class="btn btn-primary">ยืนยัน</button>
                </div>
            </div>
            
        </form>
    </div>
 





</body>
</html>