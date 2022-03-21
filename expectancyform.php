<?php
include("database.php");


if (isset($_POST['submit'])) {
  $expectancyid= $_POST["expectancyid"];
$motherid= $_POST["motherid"];
$served= $_POST["served"];
$category= $_POST["category"];
$duedate= $_POST["duedate"];
$methodology= $_POST["methodology"];

$expectancy= mysqli_query($conn,"INSERT INTO expectancy (expectancyid,motherid,served,category,duedate,methodology) VALUES ('$expectancyid','$motherid','$served','$category','$duedate','$methodology' ) ");
if($expectancy==true){
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
    <title>expectancyform</title>
    <style>
          body {
            background-image: url('talu.jpg');
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
    .form-input {
    font-family: "Roboto", sans-serif;
  outline:0;
 font-weight:800;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 0px;
  box-sizing: border-box;
  font-size: 14px;
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
.expectant {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.button-17 {
  align-items: center;
  appearance: none;
  background-color: #fff;
  border-radius: 24px;
  border-style: none;
  box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
  box-sizing: border-box;
  color: #3c4043;
  cursor: pointer;
  display: inline-flex;
  fill: currentcolor;
  font-family: "Google Sans",Roboto,Arial,sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 48px;
  justify-content: center;
  letter-spacing: .25px;
  line-height: normal;
  max-width: 100%;
  overflow: visible;
  padding: 2px 24px;
  
  position:absolute;
     top:0;
     right:0;
  text-align: center;
  text-transform: none;
  transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1),opacity 15ms linear 30ms,transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: auto;
  will-change: transform,opacity;
  z-index: 0;
}

.button-17:hover {
  background: #F6F9FE;
  color: #174ea6;
}

.button-17:active {
  box-shadow: 0 4px 4px 0 rgb(60 64 67 / 30%), 0 8px 12px 6px rgb(60 64 67 / 15%);
  outline: none;
}

.button-17:focus {
  outline: none;
  border: 2px solid #4285f4;
}

.button-17:not(:disabled) {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.button-17:not(:disabled):hover {
  box-shadow: rgba(60, 64, 67, .3) 0 2px 3px 0, rgba(60, 64, 67, .15) 0 6px 10px 4px;
}

.button-17:not(:disabled):focus {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}
.button-17:not(:disabled):active {
  box-shadow: rgba(60, 64, 67, .3) 0 4px 4px 0, rgba(60, 64, 67, .15) 0 8px 12px 6px;
}

.button-17:disabled {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

  </style> 
</head>
<body>
<div class="expectant">
        <div class="form">
    <form method="POST" action="" name="expectancyform" onSubmit="return validate_expectancyform();">
        <div class='form-input'>
            <label id='name-label'>Expectancy ID</label>
            <input type='text' id='expectancyid' name='expectancyid' placeholder='ExpectancyID' class='form-input-size'  />
        </div> </br>
        <div class='form-input'>
            <label id='name-label'>Mother ID</label>
            <input type='text' id='motherid' name="motherid" placeholder='Enter Mother ID' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Date Served</label>
            <input type='date' id='served' name="served" placeholder='Enter Date Served' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Category</label>
             <select id='category' name="category" class='form-input-size'  >
                 <option>Please select category</option>
                 <option value='Cattle'>Cattle</option>
                 <option value='Pig'>Pig</option>
                 <option value='Goat'>Goat</option>
             </select>
             </div></br>
             <div class='form-input'>
            <label id='name-label'>Due Date</label>
            <input type='date' id='duedate' name="duedate" placeholder='Enter Due Date' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Methodology</label>
             <select id='methodology' name="methodology" class='form-input-size'  >
                 <option>Please Enter Methodology</option>
                 <option value='Natural'>Natural</option>
                 <option value='Artificial'>Artificial Insemination</option>
</select>
                 </div></br> 
                 <div class='form-input'>
            <button type='submit' id='submit' name="submit" >SAVE</button>
        </div>
      
                
</form>
</div>
    </div> 
         
<script>
        function validate_expectancyform()
{
var livestockid=document.expectancyform.livestockid.value;
var motherid=document.expectancyform.motherid.value;
var served=document.expectancyform.served.value;
var category=document.expectancyform.category.selectedIndex;
var date=document.expectancyform.date.value;
var methodology=document.expectancyform.methodology.value;


if(livestockid==""){
    alert("Please enter livestock id");
    document.expectancyform.livestockid.focus();
    return false;
}
if(motherid==""){
    alert("Please enter Mother ID");
    document.expectancyform.motherid.focus();
    return false;
}
if(served==""){
    alert("Please select Date served");
    document.expectancyform.served.focus();
    return false;
}
if(category==0){
    alert("You must select a category");
    document.expectancyform.category.focus();
    return false;
}
if(date.indexOf("-")==-1){
    alert("date of birth must be entered and in the format yyyy-mm-dd");
    document.expectancyform.duedate.focus();
    return false;
}
if(comps[0].length<4 ||comps[1].length<1 || comps[2].length<1 ){
    alert("date of birth must be in the format yyyy-mm-dd");
    document.expectancyform.duedate.focus();
    return false;  
}

if(isNaN(comps[0])||isNaN(comps[1])||isNaN(comps[2]) ){
    alert("date compnents must be integers and in the format yyyy-mm-dd");
    document.expectancyform.duedate.focus();
    return false;

}


if(methodology==""){
    alert("Please select methodology");
    document.expectancyform.methodology.focus();
    return false;
}

}

</script>
<a href="expectancytable.php"> <button class="button-17" role="button">Close</button></a>

</body>
</html>