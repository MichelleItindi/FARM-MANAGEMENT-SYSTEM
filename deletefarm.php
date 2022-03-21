
<?php 

include "database.php"; 

if (isset($_GET['id'])) {

    $farmid = $_GET['id'];

    $sql = "DELETE FROM `farm` WHERE `farmid`='$farmid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: farmtable.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


