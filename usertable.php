<?php 

include('database.php');
$query="SELECT * FROM user";
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
    </style> 
</head>
<body>
<h2 style= "text-align:center">USER INFORMATION</h2>   

<table   class="content-table">
<thead>   
<tr>
 <th>User ID</th>
 <th>Category</th>
 <th>Name</th>
 <th>Mobile</th>
 <th>Email Address</th>
 <th>Username</th>
 <th>Password</th>
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
        
            <td><?php echo $row['userid']; ?></td> 
            <td><?php echo $row['category']; ?></td> 
            <td><?php echo $row['name']; ?></td> 
            <td><?php echo $row['mobile']; ?></td> 
            <td><?php echo $row['emailaddress']; ?></td> 
            <td><?php echo $row['username']; ?></td> 
            <td><?php echo $row['password']; ?></td> 
            <td><a href="delete.php?deleteid='.$row['livestockid'];.'"><button>Update</button></a></td>
            <td><a href="delete.php?deleteid='.$row['livestockid'];.'"><button>Delete</button></a></td>

            
</tr>
    
    <?php
    }
}
?>
</tr>
</tbody>
</table>

</body>
</html>