<?php
 // initialize errors variable
$errors = "";
// connect to database
include("database.php");
// insert a quote if submit button is clicked
if (isset($_POST['submit'])) {
  if (empty($_POST['id'])) {
    $errors = "You must fill in the task";
  }else{
    $id= $_POST["id"];
    $task = $_POST['task'];
    $duedate = $_POST['duedate'];
    $assign = $_POST['assign'];
    $description = $_POST['description'];

    $todo= mysqli_query($conn,"INSERT INTO task(id,task,duedate,assign,description) VALUES ('$id','$task','$duedate','$assign','$description')");

    header('location: displaytask.php');
  }
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
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
.treatment {
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
    <div class="treatment">
        <div class="form">
    <form method="post" action="" >
        <div class='form-input'>
            <label id='name-label'>ID</label>
            <input type='text' id='id' name='id' placeholder='ID' class='form-input-size'  />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Task</label>
            <input type='text' id='task' name="task" placeholder='Enter Task' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Date</label>
            <input type='date' id='duedate' name="duedate"  class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Assign to</label>
            <input type='text' id='assign' name="assign" placeholder='Enter Employee' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Task Description</label>
            <input type='text' id='description' name="description" placeholder='Describe Task' class='form-input-size' />
        </div></br>
        <div class='form-input'>
            <button type='submit' id='submit' name="submit" >ADD TASK</button>
        </div>
       
</form>
</div>
</div>
        
<a href="filtertask.php"> <button class="button-17" role="button">Close</button></a>
</body>
</html>