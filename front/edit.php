<?php include('boot.php'); ?>

<?php
    $success = $this->session->set_flashdata('success','Edit Data Successfull.....');
    $error = $this->session->set_flashdata('error','Edit Data Error.....');

    if($success){
        echo $success;
      }
       if($error){
        echo $error;
      }
?>

<div class="container mt-5">
    <h3 class="text-primary">Edit Data</h3>
    <form method="post" enctype='multipart/form-data'>
        <div class="row">
            <div class="col-md-8">
                <label for="exampleInputEmail1" class="form-label">Name</label>
		        <input type="name" name="name" class="form-control" value="<?php echo $img->name; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-8">
                <label for="exampleInputEmail1" class="form-label">Email</label>
		        <input type="email" name="email" class="form-control" value="<?php echo $img->email; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-8">
                <label for="exampleInputEmail1" class="form-label">Number</label>
		        <input type="number" name="number" class="form-control" value="<?php echo $img->number; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-8">
                <label for="exampleInputEmail1" class="form-label">Password</label>
		        <input type="password" name="password" class="form-control" value="<?php echo $img->password; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="col-md-8">
                <label for="exampleInputEmail1" class="form-label">Image</label>
		        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </form>
</div>