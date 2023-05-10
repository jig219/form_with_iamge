<?php include('boot.php'); ?>

<?php
    $success = $this->session->flashdata('success');
    $error = $this->session->flashdata('error');

    if($success){
        echo $success;
    }else{
        echo $error;
    }
?>

<table class="table table-dark table-hover">
    <thead class="table-primary">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Password</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        foreach($abc as $ab)
        {
        $no = $no + 1;
        ?>

        <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $ab['name']; ?></td>
            <td><?php echo $ab['email']; ?></td>
            <td><?php echo $ab['number']; ?></td>
            <td><?php echo $ab['password']; ?></td>
            <td><img src="<?php echo base_url(); ?>uploads/<?php echo $ab['image']; ?>" style="width: 75px;"></td>
            <td><a class="btn btn-success" href="<?php echo base_url('Home/edit/'.$ab['id']); ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="<?php echo base_url('Home/delete/'.$ab['id']); ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<div class="container text-center">
      <a class="btn btn-outline-info" href="<?php echo base_url('Home/index');?>">Add Data</a>
</div>