<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"online_notice_board");

if(isset($_POST['register'])){
    $query="insert into users values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]','$_POST[class]') ";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run){
        echo "<script>alert('Registration successfully...you may now login.');
        window.location.href = 'index.php';
        </script>";
    }
    else{
        echo $connection->error;
    }
} 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=  , initial-scale=1.0">
    <title>Notice Board</title> 
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <h3>Notice Board</h3>

        </div>
        <div class="col-md-4">

        </div>
    </div>
    <section id="register_form">
        <div class="col-md-4 m-auto block">
            <center><h4>Register Form</h4></center>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label> First name:</label>
                    <input class="form-control" type="text" name="fname" placeholder="Enter your first name">
        </div>
                <div class="form-group">
                    <label> Last name:</label>
                    <input class="form-control" type="text" name="lname" placeholder="Enter your last name">
        </div>
                <div class="form-group">
                    <label> Email ID:</label>
                    <input class="form-control" type="text" name="email" placeholder="Enter your email">
        </div>
                <div class="form-group">
                    <label> Password:</label>
                    <input class="form-control" type="password" name="password" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <label>Select Your Class:</label>
            <select class="form-control" name="class">
                <option>-Select-</option>
                <option>Nursry</option>
                <option>Kg</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              
            </select>
        </div>
        <button class="btn btn-primary" type="submit" name="register">Register</button>
            </form>
            <a href="index.php">Click here to Login</a>
        </div>

</body>
</html>
