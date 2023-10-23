<?php include "../config/config.php"; ?>
<?php require APPROOT . '/application/view/inc/header.php'; ?>
        <h2>Registrastion form</h2>
      
        
        <form method="POST" action="http://localhost/MVCframework/public/userController/addstudent">
           
            <div class="details">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control " id="text" placeholder="Enter the name" name="name">
                    
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control " id="email" placeholder="Enter email" name="email">
                </div>
            </div>
           
            
            
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control " id="pwd" placeholder="Enter password" name="password">
            </div>


            
            <div class="row justify-content-end">
                        <div class="form-group col-sm-6"><input type="submit" name="submit" value="submit"></div>
                    </div>
        </form>
    </div>

</body>

</html>