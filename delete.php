
<?php 

include "database.php"; 

if (isset($_GET['id'])) {

    $livestockid = $_GET['id'];

    $sql = "DELETE FROM `livestock` WHERE `livestockid`='$livestockid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: livestocktable.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


