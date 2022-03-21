
<?php 

include "database.php"; 

if (isset($_GET['id'])) {

    $offspringid = $_GET['id'];

    $sql = "DELETE FROM `offspring` WHERE `offspringid`='$offspringid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: offspringtable.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


