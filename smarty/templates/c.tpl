<html>

<body>

    <form action="edit.php" method="POST">
        <input type="text" name="userid" value='{$user['USERID']}' readonly>
        <input type="text" name="username" value='{$user['USERNAME']}'>
        <input type="text" name="password" value='{$user['PASSWORD']}'>
        <input name="action" value="update" type="submit">
        <input name="action" value="clear" type="submit">
    </form>

</body>

</html>