<?php
    include "config.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        td {
        text-align: center;   
        }
    </style>

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
                        <th>Student ID</th><th>Student Name</th><th>Student Age</th><th>Student Address</th><th>Image</th>
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
                    ?>
                </table>
        </div>

        <div class="add box" id="add">
            <div class = "border">
                <form action="addStudentValidate.php" method = "POST" enctype = "multipart/form-data">
                    <p>Student Name : <input type="text" name = "name"></p><br>
                    <p>Student Age : <input type="text" name = "age"></p><br>
                    <p>Student Address : <input type="text" name = "address"></p><br>
                    <p>Student Image : <input type="file" name = "image"></p><br>

                    <input type = "submit" value = "Add Details" class = "button">
                    <input type =  "reset" value = "Reset" class = "button">
                </form>

            </div>

        </div>

        <div class="edit box" id="edit">
            <table>
                    <tr>
                        <th>Student ID</th><th>Student Name</th><th>Student Age</th><th>Student Address</th><th>Image</th><th></th>
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
                                if ($image == NULL)
                                {
                                    echo '<td><h4>No<br>Image</h4></td>';
                                }
                                else
                                {
                                    echo'<td>';
                                    echo'<img src="'.$image.'" alt="" style = "width:50px; height:50px; margin-top:5px;">';
                                    echo'</td>';
                                }
                                
                                echo '<td><a href="editStudent.php?id='.$id.'"><button class = "validate">Edit Student<br>Details</button></a></tr></td>';
                           }
                       }                   
                    ?>
                </table>

        </div>

        <div class="delete box" id="delete">
            <table>
                    <tr>
                        <th>Student ID</th><th>Student Name</th><th>Student Age</th><th>Student Address</th><th>Image</th><th></th>
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
                                if ($image == NULL)
                                {
                                    echo '<td><h4>No<br>Image</h4></td>';
                                }
                                else
                                {
                                    echo'<td>';
                                    echo'<img src="'.$image.'" alt="" style = "width:50px; height:50px; margin-top:5px;">';
                                    echo'</td>';
                                }
                                
                                echo '<td><a href="deleteStudent.php?id='.$id.'"><button class = "validate">Delete Student</button></a></tr></td>';
                           }
                       }                   
                    ?>
                </table>

        </div>

        <div class="search box" id="search">
            <div class = "searchform">
                <form action="searchResults.php" method = "POST">
                    <p>Enter Student Name : <input type="text" name = "name" required></p><br>

                    <input type = "submit" value = "Search" class = "button">
                    <input type = "reset" value = "Reset" class = "button">
                </form>

            </div>

        </div>

    </div>
</body>

</html>


