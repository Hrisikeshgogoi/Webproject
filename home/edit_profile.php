<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  $fname = "";
  $lname = "";
  $email = "";
  $password = "";
  $class = "";
  $query = "select * from users where email = '$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $password = $row['password'];
    $class = $row['class'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action=""method="post"
    <div class="form-group">
        <label>First Name:</label>
        <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
    </div>
    <div class="form-group">
        <label>Last Name:</label>
        <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
    </div>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
    </div>
    <div class="form-group">
            <label>Select Your Class:</label>
            <select class="form-control" name="class" required>
                <option><?php echo $class;?></option>
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
        <button class="btn btn-primary" type="submit" name="update profile">update</button>
    
</form>
</body>
</html>