<?php
    include "config.php";

    $name = $_POST['name'];

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
            <div class = "editdetails box results">
            <div class = "border">
                <table>
                    <tr>
                        <th>Student ID</th><th>Student Name</th><th>Student Age</th><th>Student Address</th><th>Image</th>
                    </tr>
                    <?php
                       $sql = "SELECT * FROM student WHERE studentName LIKE '%$name%'";
                       $result = $conn->query($sql);

                       if ($result -> num_rows > 0)
                       {
                           while($row = $result->fetch_assoc())
                           {
                                $id = $row['studentID'];
                                $name = $row['studentName'];
                                $age = $row['studentAge'];
                                $address = $row['studentAddress'];
                                $image = $row['imgLoc'];
                               
                                echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$age.'</td><td>'.$address.'</td>';
                                if ($image == NULL)
                                {
                                    echo '<td><h4>No<br>Image</h4></td></tr>';
                                }
                                else
                                {
                                    echo'<td>';
                                    echo'<img src="'.$image.'" alt="" style = "width:50px; height:50px; margin-top:5px;">';
                                    echo'</td></tr>';
                                }
                           }
                       }    
                       else
                       {
                        echo '<p>No Search Results</p>';
                       }               
                    ?>
                </table>

            </div>

        </div>

        </div>
    </body>
</html>

