<?php 

include "database.php";

    if (isset($_POST['update'])) {
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
        $sql = "UPDATE `farrow` SET `piglets`='$piglets',`sowid`='$sowid',`sireid`='$sireid',`farrowingdate`='$farrowingdate',`induced`='$induced',`ease`='$ease',`female`='$female',`male`='$male',`alive`='$alive',`dead`='$dead',`dateweaned`='$dateweaned',`noweaned`='$noweaned',`weight`='$weight' WHERE `farrowid`='$farrowid'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $farrowid= $_GET['id']; 

    $sql = "SELECT * FROM `farrow` WHERE `farrowid`='$farrowid'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $farrowid= $row["farrowid"];
        $piglets= $row["piglets"];
    $sowid= $row["sowid"];
    $sireid= $row["sireid"];
    $farrowingdate= $row["farrowingdate"];
    $induced= $row["induced"];
    $ease= $row["ease"];
    $female= $row["female"];
    $male= $row["male"];
    $alive= $row["alive"];
    $dead= $row["dead"];
    $dateweaned= $row["dateweaned"];
    $noweaned= $row["noweaned"];
    $weight= $row["weight"];
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
            <input type='farrowid' id='farrowid' name='farrowid' placeholder=' Enter Farrow ID' class='form-input-size' value="<?php echo $farrowid; ?>"  />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Piglets</label>
            <input type='number' id='piglets' name='piglets' placeholder=' Enter number of Piglets born' class='form-input-size'  value="<?php echo $piglets; ?>" />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Sow ID</label>
            <input type='text' id='sowid' name='sowid' placeholder='Sow ID' class='form-input-size'  value="<?php echo $sowid; ?>" />
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Sire ID</label>
            <input type='text' id='sireid' name='sireid' placeholder='Sire ID' class='form-input-size'  value="<?php echo $sireid; ?>" />
        </div></br>
        <div class='form-input'>
            <label id='date-label'>Farrowing date</label>
            <input type='date' id='farrowingdate' name='farrowingdate'placeholder='Enter Farrowing date 'name="farrowingdate" class='form-input-size'  value="<?php echo $farrowingdate; ?>"/>
        </div></br>
        <div class='form-input'>
            <label id='name-label'>Farrowing Ease</label>
             <select id='ease' name="ease" class='form-input-size'  value="<?php echo $ease; ?>">
                 <option>Please select farrowing ease</option>
                 <option value='noassistance'>No Assistance</option>
                 <option value='assisted'>Assisted</option>
                 <option value='csection'>C-section</option>
             </select>
         </div></br>
         <div class='form-input'>
         <div class='form-field'>
                    <label for="induced"> Induced Labor</label>
                   <label> <input type='radio' name='induced' id='radio-btn' <?php if($induced == 'yes'){ echo "checked";} ?>>Yes </label>
                   <label> <input type='radio' name='induced' id='radio-btn' <?php if($induced == 'no'){ echo "checked";} ?>>No</label>
                   
                </div></br>
                        <label id='name-label'>Born Female</label>
                        <input type='text' id='female' name="female" placeholder='Enter number born female' class='form-input-size'  value="<?php echo $female; ?>"/>
                    </div></br>
                    <div class='form-input'>
                        <label id='name-label'>Born Male</label>
                        <input type='text' id='male' name="male" placeholder='Enter number born male' class='form-input-size' value="<?php echo $male; ?>"  />
                    </div></br>
                    <div class='form-input'>
                        <label id='name-label'>Born alive</label>
                        <input type='text' id='alive' name="alive" placeholder='Enter number born alive' class='form-input-size' value="<?php echo $alive; ?>" />
                    </div></br>
                    <div class='form-input'>
                        <label id='name-label'>Born dead</label>
                        <input type='text' id='dead' name="dead" placeholder='Enter number born dead' class='form-input-size'  value="<?php echo $dead; ?>" />
                    </div></br>
                <div class='form-input'>
                    <label id='name-label'>Date weaned</label>
                    <input type='date' id='dateweaned' name="dateweaned" placeholder='Enter Date weaned' class='form-input-size'  value="<?php echo $dateweaned; ?>" />
                </div></br>
               
       
        <div class='form-input'>
            <label id='number-label'>Number weaned</label>
            <input type='text' id='noweaned' name="noweaned" placeholder='Enter number weaned' class='form-input-size' value="<?php echo $noweaned; ?>" />
        </div></br>

        <div class='form-input'>
            <label id='name-label'>Weight</label>
            <input type='text' name="weight" placeholder='Enter Weight' value="<?php echo $weight; ?>"/>
        </div></br>

        <div class='form-input'>
            <button type='submit' id='update' name="update" >SAVE</button>
        </div>
        </div>
        </div>
    </form>            
           
</body>

</script>
<a href="filterfarrow.php"> <button class="button-17" role="button">Close</button></a>

</html>



