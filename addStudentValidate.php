<?php
    include "config.php";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $image = $_FILES['image'];
    $imgname = $_FILES['image']['name'];
    $targetDir = 'img/profile/';

    $extention = pathinfo($imgname , PATHINFO_EXTENSION);
    $rand_val = date('YMDHIS') . rand(11111, 99999);
    $targetFile = $targetDir.md5($rand_val).'.'.$extention;

    if (isset($_FILES['image']))
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'] , $targetFile))
        {
            echo 'pass image';
        }
        else
        {
            echo 'fail image';
        }
    }
    else
    {
        echo 'upload failed';
    }

    $sql = "INSERT INTO student VALUES ('' , '$name' , '$age' , '$address' , '$targetFile')";
    if($conn->query($sql))
    {
        echo "done";
        header("Location:index.php?status=pass");
    }
    else
    {
        echo "Error";
        header("Location:index.php?status=fail");
    }

    $conn->$close();
?>