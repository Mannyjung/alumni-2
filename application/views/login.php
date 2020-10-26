<!DOCTYPE html>  
<html>  
<head>   

<!--Google font-->

<!--Bootstrap-->
<!--end-->
      </head>  
      <body>  
<!-- header -->

  <!-- header -->
 <!-- Nav -->
   

    
  <!-- Nav -->
  <!--menu-->     
  
  <!--menu-->
           <br />  
           <div class="container" style="width:500px;">  
            
                <br/><br/><h1 class="form-group" align="center"><u>เข้าสู่ระบบ</u></h1><br/><br/>
                <form action="<?php echo site_url('mag_login/login');?>" class="form-group" method="post">  
                     <label>รหัสนักศึกษา</label>  
                     <input type="text" name="idstd" class="form-control" placeholder="รหัสนักศึกษา"required />  
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

