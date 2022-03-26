<?php
session_start();

//stores data from db as an array
$user=array();
include ('database.php');
//form input stored in variables

if( isset($_POST["submit"]) ) {
  $username= $_POST["username"];
  $mobile= $_POST["mobile"];
  $email= $_POST["email"];
  $password= $_POST["password"];
  
  // preventing mysqli injection 
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);

  //gets data from db and stores it in session variables. Then logs user in

  $query = "SELECT * FROM user WHERE username='$username' ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1){ 
    $user = mysqli_fetch_assoc($result);
    $_SESSION["username"] = $user['username'];
    $_SESSION["mobile"] = $user['mobile'];
    $_SESSION["email"] = $user['email'];
    $_SESSION["password"]=$user['password'];
   
    //redirects to dashboard after login
      header('Location:dashboard2.php');
  
    

  }
 
  
  

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
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
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
    background-image: url('talu.jpg');
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="" name="handlogin" onSubmit="return validate_login();"  >
      <input type="text"  name="username"placeholder="username"/>
      <input type="number" name="mobile" placeholder="mobile"/>
      <input class="text email" type="text" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password"/>
      <input type="password" name="confirmpassword" placeholder="confirm password"/>
      <button type="submit" name="submit">Login</button>
      <p class="message">Have you not registered? <a href="handlogin.php">Signup here</a></p>
    </form>
  </div>
</div>

<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

</script>
</html>