<html>
<head> 
  
    <style>
       body{
        background-image: url('talu.jpg');
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  overflow: hidden;
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
</style>
<h1> PRODUCTION SUM REPORT</h1>
<table   class="content-table">
<thead>   
<tr>
 <th>Total Milk Production</th>
 <th>Sum of Production from Cattle</th>
 <th>Sum of Production from Goat</th>
 <th>Sum of Cattle Milk Production from Last 7days</th>
 <th>Sum of Goat Milk Production from Last 7days</th>
 <th>Sum of Cattle Milk Production from Last 28days</th>
 <th>Sum of Goat Milk Production from Last 28days</th>
 <th>Sum of Cattle Milk Production from Last 90days</th>
 <th>Sum of Goat Milk Production from Last 90days</th>

</tr>
</thead>
<tbody>
<tr>
    <td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE category='Cattle'" ;
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE category='Goat'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo $row[0];

?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE daterec > DATE_SUB(NOW(), INTERVAL 7 DAY) AND category='Cattle'AND daterec <= CURDATE() ";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE daterec > DATE_SUB(NOW(), INTERVAL 7 DAY) AND category='Goat'AND daterec <= CURDATE()";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo $row[0];
?>

</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE daterec > DATE_SUB(NOW(), INTERVAL 28 DAY) AND category='Cattle'AND daterec <= CURDATE()";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>

<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE daterec > DATE_SUB(NOW(), INTERVAL 28 DAY) AND category='Goat'AND daterec <= CURDATE()";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE daterec > DATE_SUB(NOW(), INTERVAL 90 DAY) AND category='Cattle'AND daterec <= CURDATE()";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo $row[0];
?>
</br></td>

<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE daterec > DATE_SUB(NOW(), INTERVAL 90 DAY) AND category='Goat'AND daterec <= CURDATE()";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo $row[0];
?>
</br></td> </br> </br>
<td>
</br></td>
</tr>
</tbody>
</table> 
<table   class="content-table">
<thead>   
<tr> 
<tr>
 <th>Sum of Cattle Milk Production from Last 365days</th>
 <th>Sum of Goat Milk Production from Last 365days</th>
 <th>Sum of Cattle Milk Production from This Year</th>
 <th>Sum of Goat Milk Production This Year</th>
 <th>Sum of Cattle Milk Production from Last Year</th>
 <th>Sum of Goat Milk Production Last Year</th>
 <th>Sum of Cattle Milk Production from This Month</th>
 <th>Sum of Goat Milk Production This Month</th>
 <th>Sum of Cattle Milk Production from This Month</th>
 <th>Sum of Goat Milk Production This Month</th>
 
</tr>
</thead>
<tbody>
<tr>
    <td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE daterec > DATE_SUB(NOW(), INTERVAL 365 DAY) AND category='Cattle'AND daterec <= CURDATE()";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE daterec > DATE_SUB(NOW(), INTERVAL 365 DAY) AND category='Goat'AND daterec <= CURDATE()";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE YEAR(daterec)=YEAR(CURDATE())  AND category='Cattle'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>

<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE YEAR(daterec)=YEAR(CURDATE()) AND category='Goat'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE YEAR(daterec)=YEAR(CURDATE())-1  AND category='Cattle'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>

<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE YEAR(daterec)=YEAR(CURDATE())-1 AND category='Goat'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo   $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE MONTH(daterec)=MONTH(CURDATE()) AND YEAR(daterec)=YEAR(CURDATE())  AND category='Cattle'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>

<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE MONTH(daterec)=MONTH(CURDATE()) AND YEAR(daterec)=YEAR(CURDATE()) AND category='Goat'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo $row[0];
?>
</br></td>
<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE MONTH(daterec) = MONTH(DATE_SUB(Now(),INTERVAL 1 MONTH))   AND category='Cattle'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>

<td>
<?php
include("database.php");

$sql = "SELECT sum(milkproduced) from production WHERE MONTH(daterec) = MONTH(DATE_SUB(Now(),INTERVAL 1 MONTH))  AND category='Goat'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($q);

echo  $row[0];
?>
</br></td>
</tr>
</tbody>
</table>
</html>