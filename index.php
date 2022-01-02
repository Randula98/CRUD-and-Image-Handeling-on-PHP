<?php
    include "config.php";

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql)

    // if($result = $conn->query($sql))
    // {
    //     $row = $result->fetch_assoc();

    //     $id = $row['studentID'];
    //     $name = $row['studentName'];
    //     $age = $row['studentAge'];
    //     $address = $row['studentAddress'];
    //     $image = $row['imgLoc'];
    // }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">

</head>

<body onload="view()">
    <script src="scripts/script.js"></script>
    <div class="container">
        <div class="buttons">
            <button onclick="view()">View</button>
            <button onclick="add()">Add</button>
            <button onclick="edit()">Edit</button>
            <button onclick="del()">Delete</button>
            <button onclick="search()">Search</button>
        </div><br>
        <div class="view box" id="view">
            <table>
                    <tr>
                        <th>Student ID</th><th>Student Name</th><th>Student Address</th><th>Student Contact</th><th>Image</th>
                    </tr>
                    <?php

                       $sql = "SELECT * FROM student";
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
                                echo '</tr>';
                           }
                       }


                    
                    ?>
                    
                </table>

            


        </div>

        <div class="add box" id="add">

        </div>

        <div class="edit box" id="edit">

        </div>

        <div class="delete box" id="delete">

        </div>

        <div class="search box" id="search">

        </div>

    </div>
</body>

</html>


<!-- <button>View Image</button> -->