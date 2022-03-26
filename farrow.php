<?php
include('database.php');
if(isset($_POST["submit"])){
    $farrowid= $_POST["farrowid"];
    $piglets= $_POST["piglets"];
    $sowid= $_POST["sowid"];
    $sireid= $_POST["sireid"];
    $farrowingdate= $_POST["farrowingdate"];
    $induced= $_POST["induced"];
    $ease= $_POST["ease"];
    $female= $_POST["female"];
    $male= $_POST["male"];
    $alive= $_POST["alive"];
    $dead= $_POST["dead"];
    $dateweaned= $_POST["dateweaned"];
    $noweaned= $_POST["noweaned"];
    $weight= $_POST["weight"];
    $livestock= mysqli_query($conn,"INSERT INTO farrow(farrowid,piglets,sowid,sireid,farrowingdate,induced,ease,female,male,alive,dead,dateweaned,noweaned,weight) VALUES ('$farrowid','$piglets','$sowid','$sireid','$farrowingdate','$induced', '$ease', '$female', '$male',' $alive',' $dead', '$dateweaned','$noweaned', '$weight') ");
    if($livestock==true){
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
    
    <title>Farrow Table</title>
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
.farrow {
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
   <div class="farrow">
       <div class="form">
    <form method="post" action="" name="livestockform" onSubmit="return validate_livestockform();">
    <div class='form-input'>
            <label id='name-label'>Farrow ID</label>
            <input type='farrowid' id='farrowid' name='farrowid' placeholder=' Enter Farrow ID' class='form-input-size'  />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Piglets</label>
            <input type='number' id='piglets' name='piglets' placeholder=' Enter number of Piglets born' class='form-input-size'  />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Sow ID</label>
            <input type='text' id='sowid' name='sowid' placeholder='Sow ID' class='form-input-size'  />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Sire ID</label>
            <input type='text' id='sireid' name='sireid' placeholder='Sire ID' class='form-input-size'  />
        </div></br>
        <div class='form-input'>
            <label id='date-label'>Farrowing date</label>
            <input type='date' id='farrowingdate' name='farrowingdate'placeholder='Enter Farrowing date 'name="farrowingdate" class='form-input-size'/>
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Farrowing Ease</label>
             <select id='ease' name="ease" class='form-input-size' >
                 <option>Please select farrowing ease</option>
                 <option value='noassistance'>No Assistance</option>
                 <option value='assisted'>Assisted</option>
                 <option value='csection'>C-section</option>
             </select>
         </div></br>
         <div class='form-input'>
         <div class='form-field'>
                    <label for="induced"> Induced Labor</label>
                   <label> <input type='radio' name='induced' id='radio-btn' value='yes' />Yes</label>
                   <label>  <input type='radio' name='induced' id='radio-btn' value='no' />No</label>
                   
                </div></br>
                        <label id='name-label'>Born Female</label>
                        <input type='text' id='female' name="female" placeholder='Enter number born female' class='form-input-size' />
                    </div></br>
                    <div class='form-input'>
                        <label id='name-label'>Born Male</label>
                        <input type='text' id='male' name="male" placeholder='Enter number born male' class='form-input-size' />
                    </div></br>
                    <div class='form-input'>
                        <label id='name-label'>Born alive</label>
                        <input type='text' id='alive' name="alive" placeholder='Enter number born alive' class='form-input-size' />
                    </div></br>
                    <div class='form-input'>
                        <label id='name-label'>Born dead</label>
                        <input type='text' id='dead' name="dead" placeholder='Enter number born dead' class='form-input-size' />
                    </div></br>
                <div class='form-input'>
                    <label id='name-label'>Date weaned</label>
                    <input type='date' id='dateweaned' name="dateweaned" placeholder='Enter Date weaned' class='form-input-size'  />
                </div></br>
               
       
        <div class='form-input'>
            <label id='number-label'>Number weaned</label>
            <input type='text' id='noweaned' name="noweaned" placeholder='Enter number weaned' class='form-input-size' />
        </div></br>

        <div class='form-input'>
            <label id='name-label'>Weight</label>
            <textarea type='text' name="weight" placeholder='Enter Weight'></textarea>
        </div></br>

        <div class='form-input'>
            <button type='submit' id='submit' name="submit" >SAVE</button>
        </div>
        </div>
        </div>
    </form>

</body>
<script>
function validate_livestockform()
{
var livestockid=document.livestockform.livestockid.value;
var farmid=document.livestockform.farmid.value;
var category=document.livestockform.category.selectedIndex;
var livestockname=document.livestockform.livestockname.value;
var breed=document.livestockform.breed.value;
var radio=document.livestockform.radio.checked;
var date=document.livestockform.date.value;
var age=document.livestockform.age.value;
var healthstatus=document.livestockform.healthstatus.checked;
var feedingschedule=document.livestockform.feedingschedule.value;
var comps=date.split("-");

if(livestockid==""){
    alert("Please enter livestock id");
    document.livestockform.livestockid.focus();
    return false;
}
if(farmid==""){
   alert("Please enter farm id");
    document.livestockform.farmid.focus();
     return false;
}
if(category==0){
    alert("You must select a category");
    document.livestockform.category.focus();
    return false;
}
if(livestockname==""){
    alert("Please enter livestock name");
    document.livestockform.livestockname.focus();
    return false;
}
if(breed==""){
    alert("Please enter livestock breed");
    document.livestockform.breed.focus();
    return false;
}
if(radio==""){
    alert("Please select gender");
    document.livestockform.radio.focus();
    return false;
}

if(date.indexOf("-")==-1){
    alert("date of birth must be entered and in the format yyyy-mm-dd");
    document.livestockform.date.focus();
    return false;
}
if(comps[0].length<4 ||comps[1].length<1 || comps[2].length<1 ){
    alert("date of birth must be in the format yyyy-mm-dd");
    document.livestockform.date.focus();
    return false;  
}

if(isNaN(comps[0])||isNaN(comps[1])||isNaN(comps[2]) ){
    alert("date compnents must be integers and in the format yyyy-mm-dd");
    document.livestockform.date.focus();
    return false;

}
if(age==""){
    alert("Insert Age");
    document.livestockform.age.focus();
    return false;
}
if(healthstatus==""){
    alert("Please select healthstatus");
    document.livestockform.healthstatus.focus();
    return false;
}


if(feedingschedule==""){
    alert("Please enter feeding schedule");
    document.livestockform.feedingschedule.focus();
    return false;
}

}
</script>
<a href="dashboard.php"> <button class="button-17" role="button">Close</button></a>

</html>



