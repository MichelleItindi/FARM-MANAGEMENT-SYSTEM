
<?php 

include "database.php"; 

if (isset($_GET['id'])) {

    $productionid = $_GET['id'];

    $sql = "DELETE FROM `production` WHERE `productionid`='$productionid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: productiontable.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


