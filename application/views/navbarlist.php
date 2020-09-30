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
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/welcome/index">ดูหลายชื่อศิษย์เก่า<span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <span class="navbar-text">
		<hr>
        <p><?php  echo $this->session->userdata('fname')?> <?php nbs(5) ?> <a href="<?php echo base_url(); ?>index.php/mag_login/logout">logout</a></p>
      </span>
    </div>
  </div>
</nav>
<!-- Nav -->