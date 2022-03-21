
<?php 

include "database.php"; 

if (isset($_GET['id'])) {

    $treatmentid = $_GET['id'];

    $sql = "DELETE FROM `treatment` WHERE `treatmentid`='$treatmentid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: filtertreatmenttable.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


