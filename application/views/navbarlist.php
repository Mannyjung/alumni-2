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
           <p><?php echo $this->session->userdata('title').' '.$this->session->userdata('fname').' '.$this->session->userdata('lname'); ?></p>
            </span>
            <span class="navbar-text">
           <a href="<?php echo base_url();?>index.php/welcome/logout ?>">logout</a>
            </span>
          </div>
          </div>
        </nav>
  <!-- Nav -->
