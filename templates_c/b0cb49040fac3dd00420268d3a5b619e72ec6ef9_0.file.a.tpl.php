<?php
/* Smarty version 3.1.38, created on 2024-05-02 09:41:05
  from 'C:\xampp\htdocs\demo\smarty\templates\a.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66334391026882_23316063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0cb49040fac3dd00420268d3a5b619e72ec6ef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\smarty\\templates\\a.tpl',
      1 => 1714635661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66334391026882_23316063 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                <tr>
                    <td><input type="checkbox" name="userid[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['USERID'];?>
" id=""></td>
                    <td><a href="edit.php?userid=<?php echo $_smarty_tpl->tpl_vars['i']->value['USERID'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['USERID'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['USERNAME'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['PASSWORD'];?>
</td>

                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <input name="action" value="next" type="submit">
        <input name="action" value="filter" type="submit">
        <input name="action" value="Delete" type="submit">
    </form>

</body>

</html><?php }
}
