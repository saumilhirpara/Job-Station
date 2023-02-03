<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name = $_POST['title'];
        $qualifiction = $_POST['qualificition'];
        $lsalary = $_POST['lsalary'];
        $hsalary = $_POST['hsalary'];
        $area = $_POST['add'];
        $type = $_POST['jobtype'];
        $category = $_POST['category'];
        $lexperience = $_POST['lexperience'];
        $hexperience = $_POST['hexperience'];
        $gender = $_POST['gender'];
        $skill = $_POST['skill'];
        $about = $_POST['about'];
        $deadline = $_POST['deadline'];
        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
    </body>
</html>
