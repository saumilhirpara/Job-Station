<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

// Create connection
        $conn = new mysqli($servername, $username, $password);

// Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }
//        echo "Connected successfully";
        $sql = "use job_station";

        $conn->query($sql);
        ?> 
    </body>
</html>