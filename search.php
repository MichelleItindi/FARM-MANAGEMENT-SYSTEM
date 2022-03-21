
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searchbox</title> 
    <h1>SEARCH LIVESTOCK RECORDS HERE!</h1>     
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
.searchbox {  
float: left;  
}  
input[type=text] {  
padding: 6px;  
margin-top: 8px;  
font-size: 17px;  
border: none;  
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
<div class="searchbox">  
<form method="post">   
<input type="text" placeholder=" Search...." name="search" id="search">   
<button class="button-3" type="submit" name="submit" id="submit">Search</button>   
</form> 
</div>   
</body>  
</html>  



    <?php 

include "database.php";

    if (isset($_POST['submit']))
    $str = $_POST["search"];
     {
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
        $sql = "SELECT * FROM livestock where livestockid='$livestockid'"
      
        

     
    if (isset($_GET['str'])) {

      $livestockid= $_GET['str']; 
  
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
  
  
		<br><br><br>
		<table class="content-table" >
      
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
 
 
 
</tr>
</thead>
<tbody>
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
        
</tr>
    </table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>