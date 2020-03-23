<?php
    session_start();
    if (isset($_REQUEST['logout'])) {
        setcookie(session_name(), '', time() - 3600, '/');
        session_destroy();
        header("Location: loginform.php");
        exit();
    }
    if (isset($_SESSION['pid'])) {
        echo "Sie haben sich erfolgreich angemeldet und haben Zugriff auf die Anwendung (pid: ".$_SESSION['pid'].")!<br>";
    } else {
        header("Location: loginform.php");
        exit();
    }
?>
<a href="anwendung.php">Refresh</>
<br>
<a href="anwendung.php?logout=true">Logout</>

