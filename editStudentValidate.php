<?php
    include "config.php";

    $oldID = $_GET['oldID'];
    $newID = $_POST['id'];
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
            $fail = true;
        }
    }
    else
    {
        echo 'upload failed';
    }

    echo $targetFile;
    
    if($fail)
    {
        $sql = "UPDATE student SET studentID = '$newID' , studentName = '$name' , studentAge = '$age' , studentAddress = '$address' WHERE studentID = '$oldID'";
    }
    else
    {
        $sql = "UPDATE student SET studentID = '$newID' , studentName = '$name' , studentAge = '$age' , studentAddress = '$address' , imgLoc = '$targetFile' WHERE studentID = '$oldID'";
    }


    
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