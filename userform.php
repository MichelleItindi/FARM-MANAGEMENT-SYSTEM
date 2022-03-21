<?php
include("database.php");

if(isset($_POST["submit"])){
    $userid= $_POST["userid"];
    $category= $_POST["category"];
    $name= $_POST["name"];
    $mobile= $_POST["mobile"];
    $emailaddress= $_POST["emailaddress"];
    $username= $_POST["username"];
    $password= $_POST["password"];
    
    $user= mysqli_query($conn,"INSERT INTO user(userid,category,name,mobile,emailaddress,username,password) VALUES ('$userid','$category','$name',' $mobile',' $emailaddress','$username',' $password') ");
    if($user==true){
        echo '<script>alert("Submitted successfully")</script>';
       
       }
    
    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userform</title>
    <style>
        body {
            margin:50px 0px; padding:0px;
        text-align:center;
    
      background-image: url('background.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    label {
   width: 200px;
   display: inline-block;
   text-align: right;
}
  </style> 
</head>
<body>
    <form method="post" action="" name="userform" onSubmit="return validate_userform();">
        <div class='form-input'>
            <label id='name-label'>User ID</label>
            <input type='text' id='userid' name='userid' placeholder='UserID' class='form-input-size'  />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Category</label>
             <select id='category' name="category" class='form-input-size' >
                 <option>Please select user</option>
                 <option value='Farm owner'>Farm owner</option>
                 <option value='Farm manager'>Farm manager</option>
                 <option value='Farm hand'>Farm hand</option>
             </select>
         </div></br>
        <div class='form-input'>
            <label id='name-label'>Name</label>
            <input type='text' id='name' name="name" placeholder='Enter name' class='form-input-size' />
        </div></br>
        
        <div class='form-input'>
            <label id='name-label'>Mobile</label>
            <input type='text' id='mobile' name="mobile" placeholder='Enter mobile' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Email Address</label>
            <input type='text' id='emailaddress' name="emailaddress" placeholder='Enter Email address' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Username</label>
            <input type='text' id='username' name="username" placeholder='Enter username' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Password</label>
            <input type='text' id='password' name="password" placeholder='Enter password' class='form-input-size' />
        </div></br>
       
        <div class='form-input'>
            <button type='submit' id='submit' name="submit" >SAVE</button>
        </div>
</body>
<script>
    function validate_userform()
    {
    var userid=document.userform.userid.value;
    var category=document.userform.category.selectedIndex;
    var name=document.userform.name.value;
    var mobile=document.userform.mobile.value;
    var emailaddress=document.userform.emailaddress.value;
    var username=document.userform.username.value;
    var password=document.userform.password.value;
   
    if(userid==""){
        alert("Please enter user id");
        document.userform.userid.focus();
        return false;
    }
    if(category==0){
    alert("You must select a category");
    document.userform.category.focus();
    return false;
    }
    if(name==""){
        alert("Please enter name");
        document.userform.name.focus();
        return false;
    }
    if(mobile==""){
        alert("Please enter mobile number");
        document.userform.name.focus();
        return false;
    } 

     if(emailaddress.length==0|| emailaddress.indexOf("@")==-1||emailaddress.indexOf(".")==-1)
     {
         alert("You must enter a valid email");
         document.userform.emailaddress.focus();
         return false;
        
     }


     
if(username==""){
        alert("Please enter user name");
        document.userform.username.focus();
        return false;
    }
    
    if(password==""){
        alert("Please enter password");
        document.userform.password.focus();
        return false;
    }
    
}
    
    
    
    
    </script>
    </html>
    
    
    
</html>
