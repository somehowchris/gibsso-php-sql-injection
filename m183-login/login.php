<?php
    session_start();

    if (isset($_REQUEST['login'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        function redirect_to_login()
        {
            header('Location: loginform.php');
        }

        function sanitize_string($value)
        {
            return addslashes(filter_var($value, FILTER_SANITIZE_STRING));
        }

        if (!isset($username)) {
            redirect_to_login();
        }

        $username = sanitize_string($username);

        if (!isset($password)) {
            redirect_to_login();
        }

        $password = password_hash(sanitize_string($password));

        $mysqli = new mysqli('localhost:3306', 'root', 'IamTheRoot', 'm183-login');
        if ($mysqli->connect_errno) {
            die('Failed to connect to MySQL: ' . $mysqli->connect_errno .' '. $mysqli->connect_error);
        }

        $stmt = $mysqli->prepare('SELECT * FROM user WHERE username = ? AND password = ?');
        $stmt->bind_param('ss', $username, $password);

        $stmt->execute();

        $result = $stmt->get_result();

        if (!$result) {
            die('Select failed:  ' . $mysqli->errno . '  ' . $mysqli->error);
        }
                
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION['pid'] = $data['pid'];
            header('Location: anwendung.php');
        } else {
            redirect_to_login();
        }
    }
