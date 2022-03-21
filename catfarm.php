<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestock</title>
    <style>
       body{
        background-image: url('talu.jpg');
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
      }
        .content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr {
  background-color: rgba(0, 0, 0, .5);
  color:#FFFFFF;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
.button-3 {
  appearance: none;
  background-color: #2ea44f;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family:system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #2c974b;
}
.button-3:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.button-3:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.button-3:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}
</style>
</head>
<body>
<h2 style= "text-align:center">LIVESTOCK HEALTH INFORMATION</h2>   
<a href="livestockform.php">  <button class="button-3" role="button">
  CREATE
</button></a>


<a href="filterhealth.php">  <button class="button-3" role="button">
  CLOSE
</button></a>

<form action="#" method="POST">
<div class="form-group"><label >Filter HealthStatus by Farm location</label>
</div>
<div class="form-group">
    <select name="filterChoice" class="form-control" >
<option value="0">Select</option>    
<option value="1">Healthy Cattle FARM 1</option>
<option value="2">Sick Cattle FARM 1</option>
<option value="3">Healthy Pig FARM 1</option>    
<option value="4">Sick Pig FARM 1</option>
<option value="5">Healthy Goat FARM 1</option>
<option value="6">Sick Goat FARM 1</option>    
<option value="7">Healthy Cattle FARM 2</option>
<option value="8">Sick Cattle FARM 2</option>
<option value="9">Healthy Pig FARM 2</option>    
<option value="10">Sick Pig FARM 2</option>
<option value="11">Healthy Goat FARM 2</option>
<option value="12">Sick Goat FARM 2</option>  
<option value="13">Healthy Cattle FARM 3</option>
<option value="14">Sick Cattle FARM 3</option>
<option value="15">Healthy Pig FARM 3</option>    
<option value="16">Sick Pig FARM 3</option>
<option value="17">Healthy Goat FARM 3</option>
<option value="18">Sick Goat FARM 3</option>  
<option value="19">Healthy Cattle FARM 4</option>
<option value="20">Sick Cattle FARM 4</option>
<option value="21">Healthy Pig FARM 4</option>    
<option value="22">Sick Pig FARM 4</option>
<option value="23">Healthy Goat FARM 4</option>
<option value="24">Sick Goat FARM 4</option>  
<option value="25">Healthy Cattle FARM 5</option>
<option value="26">Sick Cattle FARM 5</option>
<option value="27">Healthy Pig FARM 5</option>    
<option value="28">Sick Pig FARM 5</option>
<option value="29">Healthy Goat FARM 5</option>
<option value="30">Sick Goat FARM 5</option>  
    </select>
</div>
<div class='form-input' >
            <button type="submit" id="submit" name="choice" class="button-3" >SUBMIT</button>
        </div>
</form>
<table   class="content-table">
<thead>   
<tr>
<th>LivestockID</th>
 <th>Farm ID</th>
 <th>Category</th>
 <th>Name</th>
 <th>Breed</th>
 <th>Select Gender</th>
 <th>Date of Birth</th>
 <th>Age</th>
 <th>Health status</th>
 <th>Feeding schedule</th>
 <th>Update</th>
 <th>Delete</th>
 
</tr>
</thead>
<tbody>
<tr>
 <?php
 if(!isset($_POST['choice'])){
     $query="SELECT * FROM livestock";
     getData($query);
 }
 elseif(isset($_POST['choice'])){
switch($_POST['filterChoice']){
   
                   
                           
                                case "1":
                                  $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Cattle' AND farmid='1'"; 
                                  getData($sql);
                                  break;
                                  case "2":
                                    $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Cattle' AND farmid='1'";
                                    getData($sql);
                                    break;
                                    ;
                                    case "3":
                                        $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Pig' AND farmid='1'"; 
                                        getData($sql);
                                        break;
                                        case "4":
                                          $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Pig' AND farmid='1'";
                                          getData($sql);
                                          break;
                                          ;
                                          case "5":
                                            $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Goat' AND farmid='1'"; 
                                            getData($sql);
                                            break;
                                            case "6":
                                              $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Goat'AND farmid='1' ";
                                              getData($sql);
                                              break;
                                              ;  
                                              case "7":
                                                $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Cattle' AND farmid='2'"; 
                                                getData($sql);
                                                break;
                                                case "8":
                                                  $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Cattle' AND farmid='2'";
                                                  getData($sql);
                                                  break;
                                                  ;
                                                  case "9":
                                                      $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Pig' AND farmid='2'"; 
                                                      getData($sql);
                                                      break;
                                                      case "10":
                                                        $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Pig' AND farmid='2'";
                                                        getData($sql);
                                                        break;
                                                        ;
                                                        case "11":
                                                          $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Goat' AND farmid='2'"; 
                                                          getData($sql);
                                                          break;
                                                          case "12":
                                                            $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Goat'AND farmid='2' ";
                                                            getData($sql);
                                                            break;
                                                            ;   
                                                            case "13":
                                                                $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Cattle' AND farmid='3'"; 
                                                                getData($sql);
                                                                break;
                                                                case "14":
                                                                  $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Cattle' AND farmid='3'";
                                                                  getData($sql);
                                                                  break;
                                                                  ;
                                                                  case "15":
                                                                      $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Pig' AND farmid='3'"; 
                                                                      getData($sql);
                                                                      break;
                                                                      case "16":
                                                                        $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Pig' AND farmid='3'";
                                                                        getData($sql);
                                                                        break;
                                                                        ;
                                                                        case "17":
                                                                          $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Goat' AND farmid='3'"; 
                                                                          getData($sql);
                                                                          break;
                                                                          case "18":
                                                                            $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Goat'AND farmid='3' ";
                                                                            getData($sql);
                                                                            break;
                                                                            ;  
                                                                            case "19":
                                                                                $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Cattle' AND farmid='4'"; 
                                                                                getData($sql);
                                                                                break;
                                                                                case "20":
                                                                                  $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Cattle' AND farmid='4'";
                                                                                  getData($sql);
                                                                                  break;
                                                                                  ;
                                                                                  case "21":
                                                                                      $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Pig' AND farmid='4'"; 
                                                                                      getData($sql);
                                                                                      break;
                                                                                      case "22":
                                                                                        $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Pig' AND farmid='4'";
                                                                                        getData($sql);
                                                                                        break;
                                                                                        ;
                                                                                        case "23":
                                                                                          $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Goat' AND farmid='4'"; 
                                                                                          getData($sql);
                                                                                          break;
                                                                                          case "24":
                                                                                            $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Goat'AND farmid='4' ";
                                                                                            getData($sql);
                                                                                            break;
                                                                                            ;           
                                              
                                              
                                                                                            case "25":
                                                                                                $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Cattle' AND farmid='5'"; 
                                                                                                getData($sql);
                                                                                                break;
                                                                                                case "26":
                                                                                                  $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Cattle' AND farmid='5'";
                                                                                                  getData($sql);
                                                                                                  break;
                                                                                                  ;
                                                                                                  case "27":
                                                                                                      $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Pig' AND farmid='5'"; 
                                                                                                      getData($sql);
                                                                                                      break;
                                                                                                      case "28":
                                                                                                        $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Pig' AND farmid='5'";
                                                                                                        getData($sql);
                                                                                                        break;
                                                                                                        ;
                                                                                                        case "29":
                                                                                                          $sql="SELECT * FROM livestock WHERE healthstatus='Healthy' AND category='Goat' AND farmid='5'"; 
                                                                                                          getData($sql);
                                                                                                          break;
                                                                                                          case "30":
                                                                                                            $sql="SELECT * FROM livestock WHERE healthstatus='Sick' AND category='Goat'AND farmid='5' ";
                                                                                                            getData($sql);
                                                                                                            break;
                                                                                                            ;  
}}
?>
<?php
function getData($sql){
$conn=new mysqli('localhost','michelle','Aduda@101','farmmanagementsystem');
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
    
        
        $livestockid= $row['livestockid'];
        $farmid= $row['farmid'];
        $category= $row['category'];
        $name= $row['name'];
        $breed= $row['breed'];
        $gender= $row['gender'];
        $date= $row['dateofbirth'];
        $age= $row['age'];
        $healthstatus= $row['healthstatus'];
        $feedingschedule= $row['feedingschedule'];
    
    
            ?>
            
<tr>
<td><?php echo $row['livestockid']; ?></td> 
            <td><?php echo $row['farmid']; ?></td> 
            <td><?php echo $row['category']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
            <td><?php echo $row['breed']; ?></td> 
            <td><?php echo $row['gender']; ?></td> 
            <td><?php echo $row['dateofbirth']; ?></td> 
            <td><?php echo $row['age']; ?></td> 
            <td><?php echo $row['healthstatus']; ?></td> 
            <td><?php echo $row['feedingschedule']; ?></td>
            <td><a href="update-process.php?id=<?php echo $row["livestockid"]; ?>"><button class="button-3" >Update</button></a></td>

            <td><a href="delete.php?id=<?php echo $row["livestockid"]; ?>"><button class="button-3" >Delete</button></a></td>

            
            
</tr>
<?php
    }}
    else{

    
?>
<tr><td>No data found</td></tr>
<?php

}
    }
   ?> 

   
</body>
</html>