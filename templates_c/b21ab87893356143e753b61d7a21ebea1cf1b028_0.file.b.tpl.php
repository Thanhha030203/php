<?php
/* Smarty version 3.1.38, created on 2024-05-01 10:46:33
  from 'C:\xampp\htdocs\demo\smarty\templates\b.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_66320169671d84_14694105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b21ab87893356143e753b61d7a21ebea1cf1b028' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\smarty\\templates\\b.tpl',
      1 => 1714553187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66320169671d84_14694105 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<body>
    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    <form action="login.php" method="POST">
        Name: <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"><br>
        E-mail: <input type="text" name="password" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
"><br>
        <input type="submit">
    </form>

</body>

</html><?php }
}
