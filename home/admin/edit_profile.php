<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  $name = "";
  $email = "";
  $password = "";
  $query = "select * from admins where email = '$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
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
        <label>Name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
    </div>
   
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
    </div>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
    </div>
 
    
        <button class="btn btn-primary" type="submit" name="update profile">update</button>
    
</form>
</body>
</html>