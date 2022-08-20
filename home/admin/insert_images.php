<?php
// if(isset($_POST['submit'])){
//   $connection = mysqli_connect("localhost","root","");
//   $db = mysqli_select_db($connection,"online_notice_board");
// $target_dir = "upload/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// // Check if image file is a actual image or fake image
// if (isset($_POST["submit"])) {

//     if ($target_file == "upload/") {
//         $msg = "cannot be empty";
//         $uploadOk = 0;
//     } // Check if file already exists
//     else if (file_exists($target_file)) {
//         $msg = "Sorry, file already exists.";
//         $uploadOk = 0;
//     } // Check file size
//     else if ($_FILES["fileToUpload"]["size"] > 5000000) {
//         $msg = "Sorry, your file is too large.";
//         $uploadOk = 0;
//     } // Check if $uploadOk is set to 0 by an error
//     else if ($uploadOk == 0) {
//         $msg = "Sorry, your file was not uploaded.";

//         // if everything is ok, try to upload file
//     } else {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//             $msg = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
//         }
//     }
// }}
$mssg = '';
$mysqli = new mysqli("localhost","root","","online_notice_board");

function getRandomString() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < 10; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}

if(isset($_POST['submit'])){
    extract($_POST);
    //mysqli query/ code
    $ext =pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $filename = getRandomString().".".$ext;
    if($ext=='jpeg' || $ext=='png' || $ext=='jpg'){
        move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$filename);
        $mysqli->query("INSERT INTO `image`(`name`) VALUES ('$filename')");
        $mssg = "File uploaded successfully";
    }else{
        $mssg = "File format must be jpeg or jpg (valid image file)";
    }
}

?>


<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>Insert Images</title>
  </head>
<body>
<center><h3>Insert Images</h3></center><br></br>
<form action="insert_images.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="image" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
  <?php echo $mssg; ?>
</form>

</body>
</html>