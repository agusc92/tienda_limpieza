<?php
/* Smarty version 4.3.1, created on 2023-05-21 03:13:15
  from 'C:\xampp\htdocs\tienda de limpieza\vista\tenplates\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6469702b9ac6b2_62917756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef47b1efd03640387f05d0910a2eeba3925dced3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda de limpieza\\vista\\tenplates\\lista.tpl',
      1 => 1684631573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6469702b9ac6b2_62917756 (Smarty_Internal_Template $_smarty_tpl) {
?><ol class="list-group list-group-numbered">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dato']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <a href="index.php?action=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class=" text-*"><li class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['marca'];?>
</li></a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
</ol><?php }
}
