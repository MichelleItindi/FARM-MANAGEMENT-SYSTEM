<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <title>TALU</title>
  <style>
    *{
      padding:0;
      margin:0;
      box-sizing:border-box;
    }
    section{
display: flex;
flex-direction: column;
overflow-y: hidden;
width: 100%;
height: 100vh;
overflow-x: hidden;
    }

body {
	margin: auto;
  height: 100vh;
  line-height: 1.6;

	}
h1{
  padding: 32px;
}

a {
	color: #FFF;
}



#container {
	margin: 0 auto;
  overflow-y: scroll;
  scroll-behavior: smooth;
}
.container{
  width: 100%;
  height: 100%;
}
nav {

text-align: right; 
  float: right;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%;
  height: 70px;
  z-index: 1;
  background-color:rgba(0, 0, 0, 0.2);
 
 
}

nav ul {
	padding: 0;
  margin: 0;
	list-style: none;
	position: relative;

	}
	
nav ul li {
	display:inline-block;
text-decoration: none;
  padding-right: 50px;
  text-align: left;
	}

nav a {
	display:block;
	padding:0 10px;	
  color: #FFFFFF;
	font-size:20px;
	line-height: 60px;
	text-decoration:none;
}



/* Hide Dropdowns by Default */
nav ul ul {
	display: none;
	position: absolute; 
	top: 60px; /* the height of the main nav */
}
	
/* Display Dropdowns on Hover */
nav ul li:hover > ul {
	display:inherit;
}
	
/* Fisrt Tier Dropdown */
nav ul ul li {
	width:170px;
	float:none;
	display:list-item;
	position: relative;
text-decoration: none;
  
}


nav ul ul ul li {
	position: relative;
	top:-60px; 
	left:170px;
}

	
/* Change this in order to change the Dropdown symbol */
li > a:after { content:  ' +'; }
li > a:only-child:after { content: ''; }
section{
  flex-direction: column;
  display:flex;
  width: 100%;
  height: 120vh;
}
.circular--square {
     border-radius: 50%;
     margin: 0 25px;

  
 }
 h1{
   color: black;
 }
 .images{
    margin: auto;
  width: 50%;
  border: 3px;
  padding: 10px;
 
  margin-top: -120px;
  margin-bottom: -5px;
 
 }
 section#about  p{
    text-align: center;
    width: 500px;
  height: 90px;
  padding: 30px;
  border: 1px;
  margin: auto;
  font-size: larger;
  
  margin-top: -40px;
 
 }
 section#about h1{
     text-align: center;
 }
 section#about h2{
     text-align: center;
     margin-top: -5px;
 }
 .best{
     font-size: larger;
     text-align: left;
    width: 300px;
  height: 50px;
  padding: 0px;
  border: 1px ;
  margin: auto;
  margin-top: -10px;

 }
 
section#home{
background: url("talu.jpg")no-repeat center center fixed;
-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover
}
section#about{
background:#FFFFFF;
background-position: fixed;
}
section#features{
background:#FFFFFF;
background-position: fixed;

}
section#contact{
  background-image: url('talu.jpg');
  font-family: "Roboto", sans-serif;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


 

.content{
  max-width: 650px;
  margin: 60px 100px;
}

.content .info h2{
  color: #226A80;
  font-size: 55px;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 2px;
  line-height: 60px;
  margin-bottom: 30px;
  padding-left:20px;
}

.content .info h2 span{
  color: #fff;
  font-size: 50px;
  font-weight: 600;
}

.content .info p{
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 40px;
  padding-left:20px;
}

.content .info-btn{
  color: #fff;
  background: #226A80;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 2px;
  padding: 10px 20px;
  border-radius: 5px;
  transition: 0.3s;
  transition-property: background;
  
}

.content .info-btn:hover{
  background: #0C4F60;
}


label{
  display: none;
}

#check{
  z-index: 3;
  display: none;
}

/* Responsive styles */

@media (max-width: 960px){
  header .navigation{
    display: none;
  }

  label{
    display: block;
    font-size: 25px;
    cursor: pointer;
    transition: 0.3s;
    transition-property: color;
  }

  label:hover{
    color: #fff;
  }

  label .close-btn{
    display: none;
  }

  #check:checked ~ header .navigation{
    z-index: 2;
    position: fixed;
    background: rgba(114, 223, 255, 0.9);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  #check:checked ~ header .navigation a{
    font-weight: 700;
    margin-right: 0;
    margin-bottom: 50px;
    letter-spacing: 2px;
  }

  #check:checked ~ header label .menu-btn{
    display: none;
  }

  #check:checked ~ header label .close-btn{
    z-index: 2;
    display: block;
    position: fixed;
  }

  label .menu-btn{
    position: absolute;
  }

  header .logo{
    position: absolute;
    bottom: -6px;
  }

  .content .info h2{
    font-size: 45px;
    line-height: 50px;
    
  }

  .content .info h2 span{
    font-size: 40px;
    font-weight: 600;
  }

  .content .info p{
    font-size: 14px;
  }
}

@media (max-width: 560px){
  .content .info h2{
    font-size: 35px;
    line-height: 40px;

  }

  .content .info h2 span{
    font-size: 30px;
    font-weight: 600;
  }

  .content .info p{
    font-size: 14px;
  }
}
section#home p{
font-size: 20px;
color: white;
}
  .content{
    margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  }    
.lightning{
  align-items: center;
  text-align: center;
  margin-top: -15px;
 
}
section#features ul{
  
  text-align: center;
  list-style: inside;
  font-size: larger;
}
section#features h1{
  margin-top: 20px;
  text-align: center;
}
section#features hr{
  color: black;
  
}
section#contact textarea{
  height: 180px;
  width: 265px;
  color: #000000;
  background: #f2f2f2;
}
section#contact h1{
  text-align: center;
  margin-bottom: -10px;
  
}
.logo{
    position: absolute;
   margin-top: -5px;
    font-size: xx-large;
    color: white;
    font-weight: 500;
   
  }
  .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: rgba(0, 0, 0, 0.18);
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #FFFFFF;
  font-size: 12px;
}
.form .message a {
  color: #7FFF00;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.icon{
  padding: 80px 0;
  text-align: center;
  display: inline-block;
}

section#footer{
  
background: #111;
height: auto;
position:relative;
z-index: 1000;
color: #FFF;
margin-top:10px;
overflow-x: hidden;
}
section#footer   .footer-content{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction:column ;
  text-align: center;
  overflow-x: hidden;
}
section#footer  .footer-content h3{
  font-size: 2.1rem;
  font-weight: 500;
  text-transform: capitalize;
  line-height: 3rem;
}
section#footer  .footer-content p{
  min-width: 500px;
  margin: 10px auto;
  line-height: 28px;
  font-size: 14px;
  color: #cacdd2;
}
section#footer  .socials{
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 1rem 0 3rem 0;
}
section#footer .socials li{
margin: 0 10px;
}
section#footer   .socials a{
  text-decoration: none;
  color: #fff;
  border: 1.1px  white;
  padding: 5px;
  border-radius: 50%;
}
section#footer  .socials a i{
  font-size: 1.1rem;
  width: 20px;
  transition: color .4s ease;
  color: #FFFFFF;
}
section#footer  .socials a:hover i{
  color: aqua;
}
section#footer   .footer-bottom{
  background: #000;
  width: 100vw;
padding: 20px;

text-align: center;
}
section#footer  .footer-bottom p{
  float: left;
  font-size: 14px;
  word-spacing: 2px;
  text-transform: capitalize;
}
section#footer   .footer-bottom p a{
  color: #44bae8;
  font-size: 16px;
  text-decoration: none;
}
section#footer  .footer-bottom span{
  text-decoration: uppercase;
  opacity: .4;
  font-weight: 200;
}
section#footer  .footer-menu{
  float: right;
}
section#footer  .footer-menu{
  display: flex;
}
section#footer    .footer-menu ul li{
  padding-right: 10px;
  display: block;
}
section#footer  .footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
section#footer   .footer-menu ul li a:hover{
  color:#27bcda;
}
@media (max-width:500px){
  .footer-menu ul{
    display: flex;
    margin-top: 10px;
    margin-bottom: 20px;
  }
}

  </style>
</head>
<body>
 
<div id="container">
  <nav>
    <h2><a href="#" class="logo">TALU</a></h2>
      <ul>
       
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#">Login</a>
          <!-- First Tier Drop Down -->
          <ul>
              <li><a href="ownerlogin.php">Farm owner</a></li>
              <li><a href="managerlogin.php">Farm manager</a></li>
              <li><a href="handlogin.php"> Farm hand</a></li>
          </ul>        
          </li>
          <li><a href="#">Sign up</a>
            <!-- First Tier Drop Down -->
            <ul>
                <li><a href="ownersignup.php">Farm owner</a></li>
                <li><a href="managersignup.php">Farm manager</a></li>
                <li><a href="handsignup.php">Farm hand</a></li>
            </ul>        
            </li>
  </nav>
</div>
<section id="home">
</header>
<div class="content">
  <div class="info">
    <h2>Been there <br><span>Herd that!</span></h2>
   <p> Complete Livestock Software with
      Integrated breeding, livestock record keeping, management, tracking, sales and reporting software to run a thriving livestock business.</p>
    <a href="#about" class="info-btn">More Info</a>
  </div>
</div>
</section>

  </div>
  <section  id="about">

    <h1>ABOUT</br>Everything you need to manage your livestock operation </h1>
    <p>
        Manage breeding, keep records, manage tasks, take notes, track treatments, monitor health & generate reports. All from one secure, user-friendly platform available on any device from anywhere. 

    </p>
    <div class="images">
        <a href="#">
    <img class="circular--square" src="Image by Kenneth Schipper Vera.webp" /></a>
    <a href="#">
    <img class="circular--square" src="Goat.webp" /></a>
    <a href="#">
    <img class="circular--square" src="Cow and Calf.webp" /></a> </div>
    <h2>
        Flexible enough for three types of livestock operations
    </h2>
    <div class="best">
    <h3><b>Works best for</b></h3>
    <ul>
        <li>Cattle Operations</li>
        <li>Offspring Operations</li>
        <li>Meat & Dairy Goats</li>
        <li>Pig Farms</li>
       
      </ul>
    </div>
  </section>
  
  <section id="contact">
    
    <div class="login-page">
      <h1>CONTACT US</h1>
      <div class="form">
        <form class="login-form" method="post" action="mailto:michelleitindi@gmail.com" enctype="multipart/form-data" name="handlogin" onSubmit="return validate_login();"  >
          <input type="text"  name="name"placeholder="name"/>
          <input class="text email" type="text" name="email" placeholder="email">
          <label >Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
          <button type="submit" name="submit">Submit</button>
          <p class="message" style="color: black;">Have any question? Fill here!</p>
        </form>
      </div>
    </div>
    
  </section>
  <section id="features">
    <h1>FEATURES</h1>
    <div class="lightning">
<img src="features.png" alt="" width="100px" height="130px">
</div>
  
<ul>
  <li>Secure online & mobile farm record keeping</li>
  <li>Detailed log entry for all your records</li>
  <li>Dynamic account dashboard</li>
  <li>Coordinate and manage your farm schedule</li>
    <li>24x7 online access from anywhere on any device</li>
    <li> Schedule reminders</li>
    <li>Data protection and privacy</li>
    <li>100% Kenyan based support team</li>
   
  </ul>
</section>
<section id="footer">
 <footer class="footer-content">
<h3>TALU</h3>
<p>Everything you need to manage your livestock operation</p>
<ul class="socials">
  <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
  <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
  <li><a href="www.googleplus.com"><i class="fa fa-google-plus"></i></a></li>
  <li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
  <li><a href="www.linkedin.com"><i class="fa fa-linkedin-square"></i></a></li>

</ul>
<div class="footer-menu">
  <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#features">Features</a></li>
</ul>
</div>
<div class="footer-bottom">
  <p>copyright@2022. Developed by Michelle Itindi</p>
</div>

</footer>
</section>
</body>
</html>