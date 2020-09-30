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
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/Mag_login/list">ดูรายชื่อศิษย์เก่า<span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <span class="navbar-text">
      <?php echo $this->session->userdata('title') . ' ' . $this->session->userdata('fname') . ' ' . $this->session->userdata('lname'); ?>
         <a href="<?php echo base_url(); ?>index.php/welcome/info">ดูข้อมูลส่วนตัว</a>
        <a href="<?php echo base_url(); ?>index.php/welcome/logout">logout</a>
      </span>
    </div>
  </div>
</nav>
<!-- Nav -->