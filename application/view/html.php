<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>


<!-- Modal -->

    <h1>Student Details:

    </h1>
    <!-- <?php var_dump($data); ?> -->
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th colspan="2" style="text-align:center;">Action</th>
    </tr>
  </thead>
  <tbody>
    
 
    <?php 
    foreach($data as $user):?>       
       <tr>
     <td scope='row'><?php echo $user->id;?></td>
        <td><?php echo $user->name;?></td>
        <td><?php echo $user->email;?></td>
        <td><?php echo $user->password;?></td>
        

        <td><a  href="<?php echo BASEURL;?>/edit/upadate/<?php echo $user->id;?>" class='btn btn-info' >Edit</a></td>
        <td><a href="<?php echo BASEURL;?>/userController/delete/<?php echo $user->id;?>" class='btn btn-info'>delete</a></td>
        </tr>
    <?php endforeach; ?>
    
    
    
    
    </tbody>
    
 </table>
 <a  href="<?php echo BASEURL;?>userController/addfrom" class='btn btn-info' >ADD Student</a>
</body>
</html>

<!-- <?php echo BASEURL;?>/userController/delete/<?php echo $user->id;?> -->