<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        include 'Connection_Module.php';

        if (isset($_POST['user'])) {
            //$job_id;
            $name = $_POST["name"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $user = $_POST["user"];
            $sql = "SELECT email from `$user` where email='$email'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo 'Account Already Exists';
            } else {
                $sql = "INSERT INTO `$user`( `name`, `email`, `password`) VALUES ('$name','$email','$pass')";

//        if ($conn->query($sql) === TRUE) {
//            echo "New record created successfully";
//        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
//        }
                $conn->query($sql);
                $conn->close();
                echo "<script>window.location.href='http://localhost/JobStation/login.php'</script>";
            }
        }
        ?>
    </body>
</html>

