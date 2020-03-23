<?php
        header('Content-Type: text/html; charset=iso-8859-1');
        
        empty($_REQUEST['kid']) ? $kid=2 : $kid=$_REQUEST['kid'];

        function isInteger($value)
        {
            return (preg_replace("/\D+/", "", $value) == $value) === true;
        }

        
        if (!isInteger($_REQUEST['kid'])) {
            die("Wrong formatted kid found");
        }

        $mysqli = new mysqli("localhost:3306", "root", "IamTheRoot", "m183-union");
        if ($mysqli->connect_errno) {
            die("Failed to connect to MySQL: " . $mysqli->connect_errno ." ". $mysqli->connect_error);
        }
        
        $stmt = $mysqli->prepare('SELECT kid, name, vorname FROM kontakte WHERE kid = ?');
        $stmt->bind_param('i', $_REQUEST['kid']);

        $stmt->execute();

        $result = $stmt->get_result();

        if (!$result) {
            die("Select failed:  " . $mysqli->errno . "  " . $mysqli->error);
        }
        
        if ($result->num_rows) {
            while ($row = $result->fetch_row()) {
                echo $row[0]." ".$row[1]." ".$row[2]."<br>";
            }
        } else {
            echo "Keine Eintr�ge...";
        }
?>

