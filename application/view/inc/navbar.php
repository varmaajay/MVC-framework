
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">      
      <a class="navbar-brand" href="<?php echo BASEURL; ?>"><?php echo SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASEURL; ?>userController/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASEURL; ?>userController/about">About</a>
            </li>
           
          </ul>
          
          <ul class="navbar-nav ml-auto">
          <!-- <?php if(isset($_SESSION['user_id'])) : ?> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Welcome <?php echo $_SESSION['name'] ;?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASEURL; ?>/users/logout">Logout</a>
            </li> -->
          <!-- <?php else : ?> -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASEURL; ?>userController/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASEURL; ?>userController/login">Login</a>
            </li>
          </ul>
        <!-- <?php endif ;?>  -->

        </div>
  </div>
</nav>
</body>
</html>