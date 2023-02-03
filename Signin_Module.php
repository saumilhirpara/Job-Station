<html>
    <head>
        <title></title>
    </head>
    <body>
        
        <?php
        include 'Connection_Module.php';
        if (isset($_POST['submit'])) {
            session_abort();
            //$job_id;
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $user = $_POST["user"];
            $sql = "SELECT `id`,`email`, `password` FROM `$user` WHERE email='$email'";
            $result = $conn->query($sql);
            if (isset($_POST['submit'])){

            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($pass == $row["password"]) {
                    $_SESSION['ID'] = $row["id"];
                    $_SESSION['start'] = time();
                    $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
                    $conn->close();
                    if ($user == "jobseeker") {
                        echo "<script>window.location.href='http://localhost/JobStation/dashboard/jobseeker/dashboard.php'</script>";
                    } else if($user == "employer") {
                        echo "<script>window.location.href='http://localhost/JobStation/dashboard/employer/dashboard.php'</script>";
                    }
                    else if($user == "admin"){
                        echo "<script>window.location.href='http://localhost/JobStation/dashboard/admin/dashboard.php'</script>";
                    }
                } 
                // else {
                //     echo 'Wrong EmailId or Password';
                // }
            }
        } 
            else {
                myfunction();
            }
            $conn->close();
        }
        
        ?> 
    </body>
</html>