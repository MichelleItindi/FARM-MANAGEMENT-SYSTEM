<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<h2 style= "text-align:center">TREATMENT INFORMATION</h2>   
<a href="treatmentform.php">  <button class="button-3" role="button">
  CREATE
</button></a>
<a href="filtertreatment.php">  <button class="button-3" role="button">
  CLOSE
</button></a>

<form action="#" method="POST">
<div class="form-group"><label >Filter by DueDate and By Category</label>
</div>
<div class="form-group">
    <select name="filterChoice" class="form-control" >
<option value="0">Select</option>   
<option value="13">Overdue</option>
<option value="1">Next 7 days </option>
<option value="2">Next 28 days </option>
<option value="3">Next 90days</option>
<option value="4">Next 365days</option>
<option value="5">Lifetime records</option>
<option value="6">This Year</option>
<option value="7">Next Year</option>
<option value="8">This month</option>
<option value="9">Next Month</option>
<option value="10">Vaccine</option>
<option value="11">Deworming</option>
<option value="12">Ailment</option>
    </select>
</div>
<div class='form-input' >
            <button type="submit" id="submit" name="choice" class="button-3" >SUBMIT</button>
        </div>
</form>
<table   class="content-table">
<thead>   
<tr>
 <th>Treatment ID</th>
 <th>Livestock ID</th>
 <th>Category</th>
 <th>Treatment Name</th>
 <th>Dose Administered</th>
 <th>Date Administered</th>
 <th>Status</th>
 <th>Duedate</th>
 <th>Update</th>
 <th>Delete</th>
 
</tr>
</thead>
<tbody>
<tr>
 <?php
 if(!isset($_POST['choice'])){
     $query="SELECT * FROM treatment";
     getData($query);
 }
 elseif(isset($_POST['choice'])){
switch($_POST['filterChoice']){
    case "1":
    $sql="SELECT * FROM treatment WHERE duedate < DATE_ADD(NOW(), INTERVAL 7 DAY)  AND duedate >= CURDATE()
    ORDER BY DAY(duedate)";
    getData($sql);
    break;
    case "2":
        $sql="SELECT * FROM treatment WHERE duedate < DATE_ADD(NOW(), INTERVAL 28 DAY)  AND duedate >= CURDATE()
        ORDER BY DAY(duedate)";
        getData($sql);
        break;
        case "3":
            $sql="SELECT * FROM treatment WHERE duedate < DATE_ADD(NOW(), INTERVAL 90 DAY) AND  duedate >= CURDATE()
            ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
            getData($sql);
            break;
            case "4":
                $sql="SELECT * FROM treatment WHERE duedate < DATE_ADD(NOW(), INTERVAL 365 DAY)  AND duedate >= CURDATE()
                ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                getData($sql);
                break;
                case "5":
                    $sql="SELECT * FROM treatment ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                    getData($sql);
                    break;  
                    case "6":
                        $sql="SELECT * FROM treatment WHERE YEAR(duedate)=YEAR(CURDATE())
                        ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                        getData($sql);
                        break; 

                    case "7":
                        $sql="SELECT * FROM treatment WHERE YEAR(duedate)=YEAR(CURDATE())+1
                        ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                        getData($sql);
                        break; 
                        case "8":
                            $sql="SELECT * FROM treatment WHERE MONTH(duedate)=MONTH(CURDATE()) AND YEAR(duedate)=YEAR(CURDATE())
                            ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                            getData($sql);
                            break; 
    
                            case "9":
                                $sql="SELECT * FROM treatment WHERE MONTH(duedate) = MONTH(DATE_ADD(Now(),INTERVAL 1 MONTH)) 
                                ORDER BY DAY(duedate) ASC";
                                getData($sql);
                                break; 
                                case "10":
                                    $sql="SELECT * FROM treatment WHERE category='vaccine'";
                                    getData($sql);
                                    break; 
                                    case "11":
                                        $sql="SELECT * FROM treatment WHERE category='deworming'";
                                        getData($sql);
                                        break;   
                                        case "12":
                                            $sql="SELECT * FROM treatment WHERE category='ailment'";
                                            getData($sql);
                                            break;     
                                            case "13":
                                              $sql="SELECT * FROM treatment WHERE duedate < CURDATE()
                                             ORDER BY YEAR(duedate) ASC,MONTH(duedate) ASC,DAY(duedate) ASC";
                                              getData($sql);    
                                                 
}}
?>
<?php
function getData($sql){
$conn=new mysqli('localhost','michelle','Aduda@101','farmmanagementsystem');
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
    
        
         $treatmentid=$row['treatmentid'];  
         $livestockid=$row['livestockid']; 
         $category=$row['category']; 
         $treatmentname=$row['treatmentname']; 
         $dose=$row['dose'];
         $dateadmin=$row['dateadmin'];
         $status=$row['status']; 
         $duedate=$row['duedate']; 
         $duedate=strtotime($duedate); 
         $date=date("d/m/Y",$duedate);
    
            ?>
            
<tr>
            <td><?php echo $treatmentid; ?></td> 
            <td><?php echo $livestockid; ?></td> 
            <td><?php echo $category; ?></td> 
            <td><?php echo $treatmentname; ?></td> 
            <td><?php echo $dose; ?></td>
            <td><?php echo $dateadmin; ?></td> 
            <td><?php echo $status; ?></td> 
            <td><?php echo $date; ?></td> 
            <td><a href="treatmentupdate.php?id=<?php echo $row["treatmentid"]; ?>"><button class="button-3" >Update</button></a></td>

            <td><a href="treatmentdelete.php?id=<?php echo $row["treatmentid"]; ?>"><button class="button-3" >Delete</button></a></td>

            
            
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