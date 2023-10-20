<!DOCTYPE html>
<html lang="en">

<head>
    <title>BUS TICKET BOOKING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        h2 {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .details {
            display: flex;
            justify-content: space-between;
        }

        .container {
            /* border: 2px solid black; */
            width: 500px;
        }

        .select {
            display: flex;
            margin-bottom: 20px;
        }

        .seat_no {
            display: flex;
            margin: 20px 0px;

        }

        .seat_no label {
            /* border: 2px solid black; */
            width: 60px;

        }

        .seat_no input {
            width: 100px;
        }

        .info {
            display: flex;
            justify-content: space-between;
        }

        .traveling {
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Add Students</h2>
      
        
        <form method="POST" action="http://localhost/MVCframework/public/userController/addstudent">
           
            <div class="details">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter the name" name="name">
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>
           
            
            
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            </div>


            
            <div class="row justify-content-end">
                        <div class="form-group col-sm-6"><input type="submit" name="submit" value="submit"></div>
                    </div>
        </form>
    </div>

</body>

</html>