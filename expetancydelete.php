
<?php 

include "database.php"; 

if (isset($_GET['id'])) {

    $expectancyid = $_GET['id'];

    $sql = "DELETE FROM `expectancy` WHERE `expectancyid`='$expectancyid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: expectancytable.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


