<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="ISO-8859-1">
</head>

<body>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Benutzername:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Kennwort:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <!-- ' or '1' = '1 -->
            <tr colspan="2">
                <td><input type="submit" name="login" value="login"></td>
            </tr>
        </table>
    </form>
</body>

</html>