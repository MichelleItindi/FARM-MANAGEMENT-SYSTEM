
<?php 

include "database.php"; 

if (isset($_GET['id'])) {

    $farrowid = $_GET['id'];

    $sql = "DELETE FROM `farrow` WHERE `farrowid`='$farrowid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: filterfarrow.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


