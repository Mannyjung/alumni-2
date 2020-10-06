<!-- Nav -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
   <div class="container">
     <a class="navbar-brand" href="#"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarText">
       <ul class="navbar-nav mr-auto">
         <span class="navbar-text">
           <img src="<?php echo base_url('img/l4.png') ?>" alt="" srcset="" width="50px" height="40px"></span>
         <?php if ($this->session->userdata('email')) { ?>
           <span class="navbar-text">
             <a class="nav-link" href="<?php echo base_url(); ?>index.php/mag_login/list"style="margin-top:6%;color:white;">รายชื่อศิษย์เก่า<span class="sr-only">(current)</span></a>
           </span>
         <?php } else { ?>
           <a class="nav-link"  href="<?php echo site_url('Welcome/index') ?>"style="margin-top:6%;color:white;"><span><h4>หน้าแรก</h4></span></a>
         <?php } ?>
       </ul>
       <?php if ($this->session->userdata('email')) { ?>
       <div style="margin-top:1.2%">
         <form action="<?php echo site_url('search_con/keyword') ?>" method="post" class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-1">
           <input type="text" name="search" class="deep-orange-text" placeholder="Search"> <?php echo nbs() ?><i class="fas fa-search deep-orange-text"></i>
           <!-- <button type="submit">search</button> -->
         </form>
         </div>
         <?php echo nbs(5) ?>
         <!-- Split button -->
         <div class="btn-group">
           <button type="button" class="btn btn-deep-orange darken-3 btn-rounded waves-effect btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users" aria-hidden="true"></i>  <?php echo nbs(3) ?><?php echo $this->session->userdata('fname') ?><?php echo nbs(3) ?></button>
           
           <div class="dropdown-menu">
             <a class="dropdown-item" href="<?php echo base_url('index.php/welcome/profile'); ?>">ข้อมูลส่วนตัว</a>
             <a class="dropdown-item" href="<?php echo base_url('index.php/mag_login/logout'); ?>">ออกจากระบบ</a>

           </div>
         </div>
       <?php } else { ?>
         <span class="navbar-text">
           <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/regis">ลงทะเบียนศิษย์เก่า</a>
         </span>
         <span class="navbar-text">
           <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/login">เข้าสู่ระบบ</a>
         </span>
       <?php } ?>
     </div>
   </div>
 </nav>


 <!-- Nav -->