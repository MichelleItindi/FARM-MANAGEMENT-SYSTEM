
<?php 

include "database.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `task` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location: displaytask.php');
    

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


