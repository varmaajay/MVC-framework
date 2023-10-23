<?php require APPROOT . '/application/view/inc/header.php'; ?>

<h1>Student Details:

    </h1>
    
    
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
    // var_dump($data);exit;
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
    
    </div>
    
    
    </tbody>
    
 </table>
 <a  href="<?php echo BASEURL;?>userController/addfrom" class='btn btn-info' >ADD Student</a>
</body>
</html>

<!-- <?php echo BASEURL;?>/userController/delete/<?php echo $user->id;?> -->