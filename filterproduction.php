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
<h2 style= "text-align:center">PRODUCTION INFORMATION</h2>   
<a href="productionform.php">  <button class="button-3" role="button">
  CREATE
</button></a>
<a href="catproduction.php">  <button class="button-3" role="button">
  FILTER BY CATEGORY
</button></a>
<a href="sumproduction.php">  <button class="button-3" role="button">
   SUM REPORT
</button></a>
<a href="dashboard.php">  <button class="button-3" role="button">
  CLOSE
</button></a>

<form action="#" method="POST">
<div class="form-group"><label >Filter by Date Recorded</label>
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

    </select>
</div>
<div class='form-input' >
            <button type="submit" id="submit" name="choice" class="button-3" >SUBMIT</button>
        </div>
</form>
<table   class="content-table">
<thead>   
<tr>
<th>Production ID</th>
 <th>Livestock ID</th>
 <th>Category</th>
 <th>Milk Produced in Litres</th>
 <th>Date recorded</th>
 <th>Update</th>
 <th>Delete</th>
 
</tr>
</thead>
<tbody>
<tr>
 <?php
 if(!isset($_POST['choice'])){
     $query="SELECT * FROM production";
     getData($query);
 }
 elseif(isset($_POST['choice'])){
switch($_POST['filterChoice']){
    case "1":
    $sql="SELECT * FROM production WHERE daterec > DATE_SUB(NOW(), INTERVAL 7 DAY)
    ORDER BY DAY(daterec)";
    getData($sql);
    break;
    case "2":
        $sql="SELECT * FROM production WHERE daterec > DATE_SUB(NOW(), INTERVAL 28 DAY)
        ORDER BY DAY(daterec)";
        getData($sql);
        break;
        case "3":
            $sql="SELECT * FROM production WHERE daterec > DATE_SUB(NOW(), INTERVAL 90 DAY)
            ORDER BY YEAR(daterec) ASC,MONTH(daterec) ASC,DAY(daterec) ASC";
            getData($sql);
            break;
            case "4":
                $sql="SELECT * FROM production WHERE daterec > DATE_SUB(NOW(), INTERVAL 365 DAY)
                ORDER BY YEAR(daterec) ASC,MONTH(daterec) ASC,DAY(daterec) ASC";
                getData($sql);
                break;
                case "5":
                    $sql="SELECT * FROM production ORDER BY YEAR(daterec) ASC,MONTH(daterec) ASC,DAY(daterec) ASC";
                    getData($sql);
                    break;  
                    case "6":
                        $sql="SELECT * FROM production WHERE YEAR(daterec)=YEAR(CURDATE())
                        ORDER BY YEAR(daterec) ASC,MONTH(daterec) ASC,DAY(daterec) ASC";
                        getData($sql);
                        break; 

                    case "7":
                        $sql="SELECT * FROM production WHERE YEAR(daterec)=YEAR(CURDATE())-1
                        ORDER BY YEAR(daterec) ASC,MONTH(daterec) ASC,DAY(daterec) ASC";
                        getData($sql);
                        break; 
                        case "8":
                            $sql="SELECT * FROM production WHERE MONTH(daterec)=MONTH(CURDATE()) AND YEAR(daterec)=YEAR(CURDATE())
                            ORDER BY YEAR(daterec) ASC,MONTH(daterec) ASC,DAY(daterec) ASC";
                            getData($sql);
                            break; 
    
                            case "9":
                                $sql="SELECT * FROM production WHERE MONTH(daterec) = MONTH(DATE_ADD(Now(),INTERVAL 1 MONTH)) 
                                ORDER BY DAY(daterec) ASC";
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
    
         
        $productionid=$row['productionid'];  
        $livestockid=$row['livestockid'];  
         $category=$row['category']; 
       $milkproduced= $row['milkproduced']; 
       $daterec= $row['daterec']; 
         $daterec=strtotime($daterec); 
         $date=date("d/m/Y",$daterec);
        
    
    
            ?>
            
<tr>
          
<td><?php echo $productionid; ?></td> 
            <td><?php echo $livestockid; ?></td> 
            <td><?php echo $category; ?></td> 
            <td><?php echo $milkproduced; ?></td> 
            <td><?php echo $date; ?></td> 
            <td><a href="produceupdate.php?id=<?php echo $row["productionid"]; ?>"><button class="button-3" >Update</button></a></td>

            <td><a href="deleteproduction.php?id=<?php echo $row["productionid"]; ?>"><button class="button-3" >Delete</button></a></td>

            
            
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