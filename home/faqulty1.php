<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<script>
/* Pre-document load */
    /* Preload */
    $("body").addClass("js"); 
 
/* Post-document load */
    $(document).ready(function(){ 
        /* Events */
            $("#header").append("<div id='hamburger'>Menu</div>"); 
            $("#hamburger").click(function(event){ 
                $("#hamburger").toggleClass("active"); 
                $("#navigation").toggleClass("active"); 
                $("#close").toggleClass("active"); 
                event.preventDefault(); 
            }); 
            $("body").append("<div id='close'>Close</div>"); 
            $("#close").click(function(event){ 
                $("#hamburger").removeClass("active"); 
                $("#navigation").removeClass("active"); 
                $("#close").removeClass("active"); 
                event.preventDefault(); 
            }); 
            $("#page > ul > li > a").click(function(event){ 
                $("#splash").toggle(); 
                event.preventDefault(); 
            }); 
    }); 
</script>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}




/* Simple reset */
html, body, #body *, #footer *{ margin: 0; padding: 0; display: block; color: #3d3d3d; font-family: "Open Sans", sans-serif; font-size: inherit; font-weight: normal; text-decoration: none; line-height: 1; outline: 0; } 
 
/* FontAwesome */
    @font-face{ font-family: "FontAwesome"; src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?v=4.7.0"); src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0") format("embedded-opentype"), url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0") format("woff2"), url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff?v=4.7.0") format("woff"), url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"), url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular") format("svg"); font-weight: normal; font-style: normal; } 
 
/* Queries */
    /* Min */
    @media (min-width: 0){ 
        html{ font-size: 50%;  } 
            body{ min-width: 200px; background: #f0f0ef; } 
                #body{  } 
                    #page{ padding: 4em; background: #fff; } 
                        #page > h2{ color: #444; font-size: 1.25em; font-weight: 600; text-transform: uppercase; } 
                        #page > p{ margin-top: 2em; line-height: 1.25; } 
                #footer{ background: #202020; } 
                    #cta{ padding: 4em; background: #350f55; } 
                        #cta > h2{ color: #fff; font-size: 2em; font-weight: 600; text-transform: uppercase; text-align: center; } 
                        #cta > p{ margin-top: 1em; color: #ddd; text-align: center; line-height: 1.5; } 
                        #cta > form{ margin: 0 auto; margin-top: 2em; max-width: 40em; } 
                            #cta > form{ position: relative; } 
                                #cta > form > input[type=text]{ padding: 1em; padding-right: 7em; width: 100%; height: 4em; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; } 
                                #cta > form > input[type=submit]{ position: absolute; top: 0; right: 0; bottom: 0; padding: 1em; height: 4em; color: #fff; font-weight: 600; background: #fe9909; border: 0; cursor: pointer; } 
                                #cta > form > input[type=submit]:hover{ background: #fdca40; } 
                    #resources{  } 
                        #resources > h2{ display: none; }
                        #modules{ padding: 4em; margin-bottom: -2em; } 
                            #modules > h2{ display: none; } 
                            #modules > .module{  } 
                                #modules > .module > h3{ margin-bottom: 2em; color: #f2f0ed; font-size: 1.25em; font-weight: 600; text-transform: uppercase; text-align: center; } 
                                #modules > .module > p{ margin-bottom: 2em; color: #f2f0ed; line-height: 1.25; } 
                                #modules > .module > ul{ margin-bottom: 2em; } 
                                    #modules > .module > ul > li{ color: #f2f0ed; line-height: 1.25; } 
                                        #modules > .module > ul > li > a{ color: #fe9909; line-height: 1.25; } 
                                        #modules > .module > ul > li.mail > a:before{ content: "\f003"; margin: 0 0.5em 0 0; display: inline-block; color: #f9f8f7; font-family: "FontAwesome"; text-align: center; } 
                                        #modules > .module > ul > li.phone > a:before{ content: "\f095"; margin: 0 0.5em 0 0; display: inline-block; color: #f9f8f7; font-family: "FontAwesome"; text-align: center; } 
                                        #modules > .module > ul > li.facebook > a:before{ content: "\f09a"; margin: 0 0.5em 0 0; display: inline-block; color: #f9f8f7; font-family: "FontAwesome"; text-align: center; } 
                                        #modules > .module > ul > li.twitter > a:before{ content: "\f099"; margin: 0 0.5em 0 0; display: inline-block; color: #f9f8f7; font-family: "FontAwesome"; text-align: center; } 
                                        #modules > .module > ul > li > a:hover{ color: #fdca40; } 
                    #signature{  } 
                    #legal{ padding: 2em 4em; background: #f9f8f7; } 
                        #legal > p{ font-size: 0.75em; text-align: center; } 
                            #legal > p > a{ display: inline; color: #fe9909; line-height: 1.25; text-decoration: underline; } 
                            #legal > p > a:hover{ color: #fdca40; } 
    }
    /* Bricks */
    @media (min-width: 200px){ 
        html{ font-size: 4vw; } 
            body{  } 
    } 
    /* Smartphones */
    @media (min-width: 300px){ 
        html{  } 
            body{  } 
    } 
    /* Retina */
    @media (min-width: 479px){ 
        html{ font-size: 120%; } 
            body{  } 
    } 
    /* Tablet */
    @media (min-width: 768px){ 
        html{  } 
            body{  } 
                #body{  } 
                    #resources{  } 
                        #modules{ overflow: hidden; } 
                            #modules > .module{ float: left; width: 50%; } 
                                #modules > .module > h3{ text-align: left; } 
                                #modules > .module:nth-child(odd) > h3{ text-align: right; } 
                                #modules > .module > p{  }  
                                #modules > .module:nth-child(odd) > p{ text-align: right; } 
                                #modules > .module > ul{  } 
                                    #modules > .module > ul > li{  } 
                                    #modules > .module:nth-child(odd) > ul > li{ text-align: right; } 
                                        #modules > .module > ul > li > a{  } 
    } 
    /* Desktop */
    @media (min-width: 979px){ 
        html{  } 
            body{  } 
                #body{  } 
                    #resources{  } 
                        #modules{  } 
                            #modules > .module{ width: 25%; } 
                                #modules > .module > h3{ text-align: left; } 
                                #modules > .module:nth-child(odd) > h3{ text-align: left; } 
                                #modules > .module > p{  } 
                                #modules > .module:nth-child(odd) > p{ text-align: left; } 
                                #modules > .module > ul{  } 
                                    #modules > .module > ul > li{  } 
                                    #modules > .module:nth-child(odd) > ul > li{ text-align: left; } 
                                        #modules > .module > ul > li > a{  } 
    } 
    /* Widescreen */
    @media (min-width: 1800px){ 
        html{ font-size: 1.067vw; } 
            body{  } 
    } 
    /* Max */
    @media (min-width: 2800px){ 
        html{ font-size: 186.7%; } 
            body{  } 
    } 

</style>
<link rel="stylesheet" href="footercour.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="droplink.css">
<link rel="stylesheet" href="faqulty.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a href="faqulty1.php">Faculty</a></li>
            


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


<div class="wrapper">
      <h6><center>Administrators</center></h6>
      <br>
      <br>
      <br>
      <div class="our_team">
          <div class="team_member">
            <div class="member_img">
               <img src="dr.jpg" alt="our_team" style="border-radius:100% ;">
              <div class="social_media">
                <a href="https://www.facebook.com/"><div class="facebook item"><i class="fab fa-facebook-f"></i></div></a>
                <a href="https://twitter.com/i/flow/login"><div class="twitter item"><i class="fab fa-twitter"></i></div></a>
                <a href="https://www.instagram.com/accounts/login/"><div class="instagram item"><i class="fab fa-instagram"></i></div></a>
               </div>
            </div>
            <h3>Rajib Borgohain</h3>
            <span>Administrative Director</span>
            <p>Director of the school</p>
          </div>
          <div class="team_member">
             <div class="member_img">
              <img src="LOGO.png" alt="our_team" style="border-radius:100% ;">
               <div class="social_media">
                 <a href="https://www.facebook.com/"><div class="facebook item"><i class="fab fa-facebook-f"></i></div></a>
                 <a href="https://twitter.com/i/flow/login"><div class="twitter item"><i class="fab fa-twitter"></i></div></a>
                 <a href="https://www.instagram.com/accounts/login/"><div class="instagram item"><i class="fab fa-instagram"></i></div></a>
              </div>
            </div>
            <h3>Mridul Gogoi</h3>
            <span>Account Manager</span>
            <p>account manager</p>
        </div>
          <div class="team_member">
             <div class="member_img">
               <img src="p.jpg" alt="our_team" style="border-radius:100% ;">
               <div class="social_media">
                 <a href="https://www.facebook.com/"><div class="facebook item"><i class="fab fa-facebook-f"></i></div></a>
                 <a href="https://twitter.com/i/flow/login"><div class="twitter item"><i class="fab fa-twitter"></i></div></a>
                 <a href="https://www.instagram.com/accounts/login/"><div class="instagram item"><i class="fab fa-instagram"></i></div></a>
              </div>
            </div>
            <h3>Rupanjali Baruah</h3>
            <span>Headmistress</span>
            <p>Headmistress of the school</p>
        </div>
      </div>
    
      
  </div>


<br>
<br>
<br>



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
