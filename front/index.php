<?php include('boot.php'); ?>
<?php include('nav.php'); ?>


<?php
          $success= $this->session->flashdata('success');
          $error= $this->session->flashdata('error');

          if($success){
          ?>
          <div class="alert alert-success" role="alert">
            <?php echo $success; ?>
          </div>
          <?php
          }
          if($error){
          ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div> 
          <?php 
          }
          ?>

<div class="container mt-5">
    <h3 class="text-success">Insert Data With Image</h3>
    <form action="<?php echo base_url('Home/add'); ?>" method="post" enctype='multipart/form-data'>
        <div class="row">
            <div class="col-md-7">
                <label for="exampleInputEmail1" class="form-label">Name</label>
		        <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-7">
                <label for="exampleInputEmail1" class="form-label">Email</label>
		        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-7">
                <label for="exampleInputEmail1" class="form-label">Number</label>
		        <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-7">
                <label for="exampleInputEmail1" class="form-label">Password</label>
		        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-7">
                <label for="exampleInputEmail1" class="form-label">Image</label>
		        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Submit</button>
        <a href="<?php echo base_url('Home/select'); ?>" class="btn btn-outline-dark mt-3">Show Data</a>
    </form>
</div>
