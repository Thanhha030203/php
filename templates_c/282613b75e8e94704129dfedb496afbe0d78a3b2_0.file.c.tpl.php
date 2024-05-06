<?php
/* Smarty version 3.1.38, created on 2024-05-02 09:29:26
  from 'C:\xampp\htdocs\demo\smarty\templates\c.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_663340d6c0edc5_73514651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '282613b75e8e94704129dfedb496afbe0d78a3b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\smarty\\templates\\c.tpl',
      1 => 1714634960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663340d6c0edc5_73514651 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<body>

    <form action="edit.php" method="POST">
        <input type="text" name="userid" value='<?php echo $_smarty_tpl->tpl_vars['user']->value['USERID'];?>
' readonly>
        <input type="text" name="username" value='<?php echo $_smarty_tpl->tpl_vars['user']->value['USERNAME'];?>
'>
        <input type="text" name="password" value='<?php echo $_smarty_tpl->tpl_vars['user']->value['PASSWORD'];?>
'>
        <input name="action" value="update" type="submit">
        <input name="action" value="clear" type="submit">
    </form>

</body>

</html><?php }
}
