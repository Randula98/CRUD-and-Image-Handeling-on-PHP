<?php
    include "config.php";

    $id = $_GET['id'];
    
    $sql = "DELETE FROM student WHERE studentID = '$id'";

    if($conn->query($sql))
    {
        header("Location:index.php?status=pass");
    }
    else
    {
        header("Location:index.php?status=fail");
    }
?>