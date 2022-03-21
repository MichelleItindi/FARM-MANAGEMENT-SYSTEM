
<?php 

include "database.php";

    if (isset($_POST['update'])) {
        $offspringid= $_POST["offspringid"];
    $gender= $_POST["radio"];
    $batchnumber= $_POST["batchnumber"];
    $motherid= $_POST["motherid"];
    $fatherid= $_POST["fatherid"];
    $category= $_POST["category"];
    $duedate= $_POST["duedate"];
    
        $sql = "UPDATE `offspring` SET `gender`='$gender',`batchnumber`='$batchnumber',`motherid`='$motherid',`fatherid`='$fatherid',`category`='$category',`duedate`='$duedate' WHERE `offspringid`='$offspringid'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 
    if (isset($_GET['id'])) {
        $offspringid= $_GET['id']; 
    
        $sql = "SELECT * FROM `offspring` WHERE `offspringid`='$offspringid'";
    
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) {        
    
            while ($row = $result->fetch_assoc()) {
    
             
               $offspringid=$row['offspringid'];  
               $gender=$row['gender'];  
                $batchnumber=$row['batchnumber']; 
              $motherid= $row['motherid']; 
              $fatherid= $row['fatherid']; 
              $category= $row['category']; 
              $duedate= $row['duedate']; 

    
            } 
          }}
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hereditaryform</title>
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
.offspring {
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
    <div class="offspring"></div>
    <div class="form">
    <form method="post" action="" name="offspringform" onSubmit="return validate_offspringform();">
        <div class='form-input'>
            <label id='name-label'>OffspringID</label>
            <input type='text' id='offspringid' name='offspringid' placeholder='OffspringID' class='form-input-size' value="<?php echo $offspringid; ?>" />
        </div> </br>
        <div class='form-field'>
            <label for="gender"> Select gender</label>
            <label><input type='radio' name="radio" id='radio-btn' value='Male'<?php if($gender == 'male'){ echo "checked";} ?>>Male </label>
            <label><input type='radio' name="radio" id='radio-btn' value='Female'<?php if($gender == 'female'){ echo "checked";} ?>>Female  </label>
           
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Batch number</label>
            <input type='text' id='batchnumber' name="batchnumber" placeholder='Enter Batch number' class='form-input-size'value="<?php echo $batchnumber; ?>"  />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Mother ID</label>
            <input type='text' id='motherid' name="motherid" placeholder='Enter Mother ID' class='form-input-size'value="<?php echo $motherid; ?>" />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Father ID</label>
            <input type='text' id='fatherid' name="fatherid" placeholder='Enter Father ID' class='form-input-size'value="<?php echo $motherid; ?>" />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Category</label>
             <select id='category' name="category" class='form-input-size' value="<?php echo $category; ?>" >
                 <option>Please select category</option>
                 <option value='Cattle'>Cattle</option>
                 <option value='Pig'>Pig</option>
                 <option value='Goat'>Goat</option>
             </select>
         </div></br>
         <div class='form-input'>
            <label id='date-label'>Date of Birth</label>
            <input type='text' id='date' placeholder='Enter DOB'name="date" class='form-input-size'value="<?php echo $duedate; ?>"/>
        </div></br>
        <div class='form-input'>
            <button type='submit' id='submit' name="update" >SAVE</button>
        </div>
      </form>
      </div>
      </div>
       
 
<a href="heriditarylineage.php"> <button class="button-17" role="button">Close</button></a>

</body>
</html>




 
