<!DOCTYPE html>  
<html>  
<head>   

<!--Google font-->
<link href="https://fonts.googleapis.com/css?family=Athiti|Bai+Jamjuree|Chakra+Petch|Charm|Charmonman|Chonburi|Fahkwang|Itim|K2D|Kanit|KoHo|Kodchasan|Krub|Maitree|Mali|Mitr|Niramit|Pattaya|Pridi|Prompt|Sarabun|Sriracha|Srisakdi|Taviraj|Thasadith|Trirong&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Muli|Noto+Sans|PT+Sans|Poppins|Raleway|Roboto+Mono|Roboto+Slab|Ubuntu&display=swap" rel="stylesheet">
<!--Google font-->
<!--css-->
<link rel="stylesheet" type="text/css" href="styles.css">
<!--css-->
<!--Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!--Bootstrap-->
<!--end-->
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
                <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/index">หน้าหลัก<span class="sr-only">(current)</span></a>
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
  <!--menu-->     
  
  <!--menu-->
           <br />  
           <div class="container" style="width:500px;">  
            
                <br/><br/><h1 class="form-group" align="center"><u>เข้าสู่ระบบ</u></h1><br/><br/>
                <form action="<?php echo site_url('mag_login/login');?>" class="form-group" method="post">  
                     <label>ชื่อผู้ใช้</label>  
                     <input type="email" name="email" class="form-control" placeholder="อีเมลล์"required />  
                     <br />  
                     <label>รหัสผ่านผู้ใช้</label>  
                     <input type="password" name="password" class="form-control"placeholder="รหัสผ่านผู้ใช้" required />  
                     <br /> 

                     <div class="form-group" align="right">
                     <input type="submit" name="login" class="btn btn-primary" value="ตกลง" />  
                    </div>
                    
                </form>  
           </div>  
           <br><br/><br/><br/><br/>
      </body>  
 </html>  

