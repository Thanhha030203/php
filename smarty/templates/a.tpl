<html>

<body>

    <a href="login.php">Đăng xuất</a>
    <form action="index.php" method="post">

        <input type="text" name="id">

        <table>

            <tr>
                <td>Id</td>
                <td>customer</td>
                <td>address</td>
                <td>Email</td>
            </tr>
            {foreach from=$customer item=i}
                <tr>
                    <td><input type="checkbox" name="userid[]" value="{$i['USERID']}" id=""></td>
                    <td><a href="edit.php?userid={$i['USERID']}">{$i['USERID']}</a></td>
                    <td>{$i['USERNAME']}</td>
                    <td>{$i['PASSWORD']}</td>

                </tr>
            {/foreach}
        </table>
        <input name="action" value="next" type="submit">
        <input name="action" value="filter" type="submit">
        <input name="action" value="Delete" type="submit">
    </form>

</body>

</html>