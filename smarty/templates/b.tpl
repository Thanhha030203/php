<html>

<body>
    {$error}
    <form action="login.php" method="POST">
        Name: <input type="text" name="username" value="{$user.username}"><br>
        E-mail: <input type="text" name="password" value="{$user.password}"><br>
        <input type="submit">
    </form>

</body>

</html>