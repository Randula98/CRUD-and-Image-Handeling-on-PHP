<?php
    include "config.php";

    $id = $_GET['id'];
    
    $sql = "SELECT * FROM student WHERE studentID = '$id'";

    if($result = $conn->query($sql))
    {
        $row = $result->fetch_assoc();

        $id = $row['studentID'];
        $name = $row['studentName'];
        $age = $row['studentAge'];
        $address = $row['studentAddress'];
        $image = $row['imgLoc'];
    }
    else
    { 
        echo "Fail";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Menu</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div class = "container">
            <div class="buttons">
                <button><a href="index.php">View</a></button>
            </div>
            <div class = "editdetails box">
            <div class = "border">
                <img src="<?php echo $image ?>" alt="" class = "editimage">

                <form action="editStudentValidate.php?oldID=<?php echo $id?>" method = "POST" enctype = "multipart/form-data">
                    <p>Student ID : <input type="text" name = "id" value = "<?php echo $id ?>"></p><br>
                    <p>Student Name : <input type="text" name = "name" value = "<?php echo $name ?>"></p><br>
                    <p>Student Age : <input type="text" name = "age" value = "<?php echo $age ?>"></p><br>
                    <p>Student Address : <input type="text" name = "address" value = "<?php echo $address ?>"></p><br>
                    <p>Student Image : <input type="file" name = "image"></p><br>

                    <input type="submit" value = "Edit Details" class = "button">
                </form>

            </div>

        </div>

        </div>
    </body>
</html>