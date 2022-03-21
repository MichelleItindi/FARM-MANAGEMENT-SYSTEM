<?php 

include('database.php');
$query="SELECT * FROM farm";
$result = mysqli_query($conn, $query);
?>

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
<h2 style= "text-align:center">FARM INFORMATION</h2>   
<a href="farmform.php">  <button class="button-3" role="button">
  CREATE
</button></a>
<a href="filterfarm.php">  <button class="button-3" role="button">
  CLOSE</button></a>
<table   class="content-table">
<thead>   
<tr>
 <th>Farm ID</th>
 <th>Farm Name</th>
 <th>Address</th>
 <th>Description</th>
 <th>Update</th>
 <th>Delete</th>
 
 
</tr>
</thead>
<tbody>
<tr>
 <?php
   if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
        
            <td><?php echo $row['farmid']; ?></td> 
            <td><?php echo $row['farmname']; ?></td> 
            <td><?php echo $row['address']; ?></td> 
            <td><?php echo $row['description']; ?></td> 
            <td><a href="farmupdate.php?id=<?php echo $row["farmid"]; ?>"><button class="button-3" >Update</button></a></td>

            <td><a href="deletefarm.php?id=<?php echo $row["farmid"]; ?>"><button class="button-3" >Delete</button></a></td>

            
</tr>
    
    <?php
    }
}
?>
</tr>
</tbody>
</table>

</button></a>
</body>
</html>