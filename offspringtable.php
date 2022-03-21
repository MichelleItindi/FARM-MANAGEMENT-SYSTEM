<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatment</title>
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
<h2 style= "text-align:center">OFFSPRING INFORMATION</h2>   
<a href="offspringform.php">  <button class="button-3" role="button">
  CREATE
</button></a>

<a href="dashboard.php">  <button class="button-3" role="button">
  CLOSE
</button></a>

<form action="#" method="POST">
<div class="form-group"><label >Filter by Date of Birth and Category</label>
</div>
<div class="form-group">
    <select name="filterChoice" class="form-control" >
<option value="0">Select</option>    
<option value="1">Last 7 days </option>
<option value="2">Last 28 days </option>
<option value="3">Lat 90days</option>
<option value="4">Last 365days</option>
<option value="5">Lifetime records</option>
<option value="6">This Year</option>
<option value="7">Last Year</option>
<option value="8">This month</option>
<option value="9">Last Month</option>
<option value="10">Cattle</option>
<option value="11">Goat</option>
<option value="12">Pig</option>
    </select>
</div>
<div class='form-input' >
            <button type="submit" id="submit" name="choice" class="button-3" >SUBMIT</button>
        </div>
</form>
<table   class="content-table">
<thead>   
<tr>
 <th>Offspring ID</th>
 <th>Gender</th>
 <th>Batch Number</th>
 <th>Mother ID</th>
 <th>Father ID</th>
 <th>Category</th>
 <th>Date of Birth</th>
 <th>Update</th>
 <th>Delete</th>
 
</tr>
</thead>
<tbody>
<tr>
 <?php
 if(!isset($_POST['choice'])){
     $query="SELECT * FROM offspring";
     getData($query);
 }
 elseif(isset($_POST['choice'])){
switch($_POST['filterChoice']){
    case "1":
    $sql="SELECT * FROM offspring WHERE duedate > DATE_SUB(NOW(), INTERVAL 7 DAY)
    ORDER BY DAY(duedate)";
    getData($sql);
    break;
    case "2":
        $sql="SELECT * FROM offspring WHERE duedate > DATE_SUB(NOW(), INTERVAL 28 DAY)
        ORDER BY DAY(duedate)";
        getData($sql);
        break;
        case "3":
            $sql="SELECT * FROM offspring WHERE duedate > DATE_SUB(NOW(), INTERVAL 90 DAY)
            ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
            getData($sql);
            break;
            case "4":
                $sql="SELECT * FROM offspring WHERE duedate > DATE_SUB(NOW(), INTERVAL 365 DAY)
                ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                getData($sql);
                break;
                case "5":
                    $sql="SELECT * FROM offspring ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                    getData($sql);
                    break;  
                    case "6":
                        $sql="SELECT * FROM offspring WHERE YEAR(duedate)=YEAR(CURDATE())
                        ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                        getData($sql);
                        break; 

                    case "7":
                        $sql="SELECT * FROM offspring WHERE YEAR(duedate)=YEAR(CURDATE())-1
                        ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                        getData($sql);
                        break; 
                        case "8":
                            $sql="SELECT * FROM offspring WHERE MONTH(duedate)=MONTH(CURDATE()) AND YEAR(duedate)=YEAR(CURDATE())
                            ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                            getData($sql);
                            break; 
    
                            case "9":
                                $sql="SELECT * FROM offspring WHERE MONTH(duedate) = MONTH(DATE_SUB(Now(),INTERVAL 1 MONTH)) 
                                ORDER BY DAY(duedate) ASC";
                                getData($sql);
                                break; 
                                case "10":
                                  $sql="SELECT * FROM offspring WHERE category='Cattle'"; 
                                  getData($sql);
                                  break;
                                  case "11":
                                    $sql="SELECT * FROM offspring WHERE category='Goat'";
                                    getData($sql);
                                    break;
                                    case "12":
                                      $sql="SELECT * FROM offspring WHERE category='Pig'";
                                      getData($sql);
                                      break;

}}
?>
<?php
function getData($sql){
$conn=new mysqli('localhost','michelle','Aduda@101','farmmanagementsystem');
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
    
        
         $offspringid=$row['offspringid'];  
         $gender=$row['gender']; 
         $batchnumber=$row['batchnumber']; 
         $motherid=$row['motherid']; 
         $fatherid=$row['fatherid'];
         $category=$row['category']; 
         $duedate=$row['duedate']; 
         $duedate=strtotime($duedate); 
         $date=date("d/m/Y",$duedate);
    
    
            ?>
            
<tr>
            <td><?php echo $offspringid; ?></td> 
            <td><?php echo $gender; ?></td> 
            <td><?php echo $batchnumber; ?></td> 
            <td><?php echo $motherid; ?></td> 
            <td><?php echo $fatherid; ?></td>
            <td><?php echo $category; ?></td> 
            <td><?php echo $date; ?></td> 

            <td><a href="updateoffspring.php?id=<?php echo $row["offspringid"]; ?>"><button class="button-3" >Update</button></a></td>

            <td><a href="deleteoffspring.php?id=<?php echo $row["offspringid"]; ?>"><button class="button-3" >Delete</button></a></td>

            
            
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