<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLEY</title>
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="gallery.js">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footergall.css">

</head>
<body>
    <div class="custom-padding">
        <nav>
          <div class="logo">
            <img src="LOGO.png" height="58" alt="LOGO">
          <p style="background: -webkit-linear-gradient(red,blue); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Sri Sathya Sai Prashanti Divine Valley School</p>
        </div>
  
          <ul class="menu-area">
            <li><a href="corousel.php">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">Blog</a></li>
            <li><a href="faqulty1">Faculty</a></li>
            


<div class="dropdown">
  <button class="dropbtn">Login</button>
  <div class="dropdown-content">
    <a href="index.php">Users LOgin</a>
    <a href="admin/index.php">Admin Login</a>
  </div>
</div>

            
          </ul>
        </nav>
      </div>
      <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
          }
          
          .dropdown {
            position: relative;
            display: inline-block;
          }
          
          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }
          
          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
          }
          
          .dropdown-content a:hover {background-color: #ddd;}
          
          .dropdown:hover .dropdown-content {display: block;}
          
          .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>

    <input type="radio" name="Photos" id="check1" checked>
    <input type="radio" name="Photos" id="check2" checked>
    <input type="radio" name="Photos" id="check3" checked>
    <input type="radio" name="Photos" id="check4" checked>
      

    <div class="container">
        <h1>PHOTO GALLERY</h1>
        <div class="top-content">
            <h3>galley</h3>
            <!--<label for="check1">Place</label>
            <label for="check2">School</label>
            <label for="check3">events</label>
            <label for="check4">Name4</label>-->
        </div>
    </div>
    <div class="gallery">
        <?php
        $mysqli = new mysqli("localhost","root","","online_notice_board");

        $res = $mysqli->query("SELECT * FROM `image`");
        if($mysqli->affected_rows){
            while($row=$res->fetch_assoc()){
        ?>
        <div class="pic place">
            <img src="<?php echo "admin/uploads/".$row['name']; ?>">
        </div>
        <?php }}else{
            echo "No images found...";
        } ?>

    </div>
    
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3><span><img src="LOGO.png" alt="LOGO"></span><span class="textfot"> Sri Sathya Sai <p>Prashanti Divine Valley School</p></span> </h3>

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                
                <a href="#">Blog</a>
            
                <a href="#">Pricing</a>
            
                <a href="#">About</a>
                
                <a href="#">Faq</a>
                
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Sri Sathya Sai School © 2015</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Hatimura Gaon,Dibrugarh</span> Assam, India</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 1234567890</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@Prashantidivinevalleyschool.com">support@Prashantidivinevalleyschool.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the School</span>
                Sri Sathya Sai Prasanthi Divine Valley School,
                     Dibrugarh A fructiferous tree from the tiny sapling Sri Sathya Sai Education is an integral part of Sai Mission through which the legacy of Sathya Sai will be carried forward by the coming generation of centuries. 
                     Swami emphasized this time and again in many of his divine discourses and through establishment of many education institutions of excellence well known world over. 
                     Following the divine directive, many devotees....<a href="about.html">...Read more</a>
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>
</body>
</html>