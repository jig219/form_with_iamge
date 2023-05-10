<?php include('boot.php'); ?>


<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="https://pluspng.com/img-png/png-logo-design--500.png" style="width:50px; height:50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white fs-5" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fs-5" href="<?php echo base_url('Home/index'); ?>">Apply</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fs-5" href="<?php echo base_url(); ?>">Edit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fs-5" href="<?php echo base_url(); ?>">Submit</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

