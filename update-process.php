<?php 

include "database.php";

    if (isset($_POST['update'])) {
      $livestockid= $_POST["livestockid"];
      $farmid= $_POST["farmid"];
      $category= $_POST["category"];
      $name= $_POST["livestockname"];
      $breed= $_POST["breed"];
      $gender= $_POST["radio"];
      $date= $_POST["date"];
      $age= $_POST["age"];
      $healthstatus= $_POST["healthstatus"];
      $feedingschedule= $_POST["feedingschedule"];
        $sql = "UPDATE `livestock` SET `farmid`='$farmid',`category`='$category',`name`='$name',`breed`='$breed',`gender`='$gender',`dateofbirth`='$date',`age`='$age',`healthstatus`='$healthstatus',`feedingschedule`='$feedingschedule' WHERE `livestockid`='$livestockid'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $livestockid= $_GET['id']; 

    $sql = "SELECT * FROM `livestock` WHERE `livestockid`='$livestockid'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

           $livestockid= $row['livestockid']; 
           $farmid=$row['farmid'];  
           $category=$row['category'];  
            $name=$row['name']; 
          $breed= $row['breed']; 
         $gender=$row['gender']; 
          $date=$row['dateofbirth']; 
          $age=$row['age']; 
          $healthstatus= $row['healthstatus']; 
         $feedingschedule= $row['feedingschedule']; 

        } 
      }}
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>LivestockTable</title>
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
.livestock {
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
   <div class="livestock">
       <div class="form">
    <form method="post" action="">
        <div class='form-input'>
            <label id='name-label'>LivestockID</label>
            <input type='text' id='livestockid' name='livestockid' placeholder='LivestockID' class='form-input-size'value="<?php echo $livestockid; ?>"   />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Farm ID</label>
            <input type='text' id='farmid' name='farmid' placeholder='Farm ID' class='form-input-size'value="<?php echo $farmid; ?>"  />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Category</label>
             <select id='category' name="category" class='form-input-size'value="<?php echo $category; ?>"  >
                 <option>Please select category</option>
                 <option value='Cattle'>Cattle</option>
                 <option value='Pig'>Pig</option>
                 <option value='Goat'>Goat</option>
             </select>
         </div></br>
                    <div class='form-input'>
                        <label id='name-label'>Name</label>
                        <input type='text' id='livestockname' name="livestockname" placeholder='Enter Livestock name' class='form-input-size'value="<?php echo $name; ?>" />
                    </div></br>
         
                <div class='form-input'>
                    <label id='name-label'>Breed</label>
                    <input type='text' id='breed' name="breed" placeholder='Enter Breed' class='form-input-size'value="<?php echo $breed; ?>"   />
                </div></br>
                <div class='form-field'>
                    <label for="gender"value="<?php echo $gender; ?>" > Select gender</label>
                   <label> <input type='radio' name='radio' id='radio-btn' value='male' <?php if($gender == 'male'){ echo "checked";} ?>>Male</label>
                   <label>  <input type='radio' name='radio' id='radio-btn' value='female' <?php if($gender == 'female'){ echo "checked";} ?>>Female </label>
                   
                </div></br>
        <div class='form-input'>
            <label id='date-label'>Date of Birth</label>
            <input type='text' id='date' placeholder='Enter DOB'name="date" class='form-input-size'value="<?php echo $date; ?>"/>
        </div></br>
        <div class='form-input'>
            <label id='number-label'>Age</label>
            <input type='number' id='age' name="age" placeholder='0' class='form-input-size'value="<?php echo $age; ?>" />
        </div></br>

       
       
        <div class='form-field'>
            <label id='name-label'>Healthstatus</label>
            <label><input type='radio' id='healthy'name="healthstatus" value='Healthy' <?php if($healthstatus == 'Healthy'){ echo "checked";} ?>>Healthy</label>
            <label><input type='radio' id='sick' name="healthstatus"   value='Sick' <?php if($healthstatus == 'Sick'){ echo "checked";} ?>>Sick </label>
          
        </div></br>

        <div class='form-input'>
            <label id='name-label'>Feeding schedule</label>
            <input type='text' name="feedingschedule" placeholder='Enter Feeding Schedule'value="<?php echo $feedingschedule; ?>">
        </div></br>

        <div class='form-input'>
            <button type='submit' id='submit' name="update" >SAVE</button>
        </div>
        </div>
        </div>
    </form>

</body>

</script>
<a href="livestocktable.php"> <button class="button-17" role="button">Close</button></a>

</html>



