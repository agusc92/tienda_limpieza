<?php
/* Smarty version 4.3.1, created on 2023-05-21 02:47:57
  from 'C:\xampp\htdocs\tienda de limpieza\vista\tenplates\individual.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64696a3d1e1b89_44152150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f524be45259ee471188de3fc1d2a7787f9db913' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda de limpieza\\vista\\tenplates\\individual.tpl',
      1 => 1684629994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64696a3d1e1b89_44152150 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card" style="width: 18rem;">
  <div class="card-header">
    <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>

  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value['marca'];?>
</li>
    <li class="list-group-item">precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</li>
    
  </ul>
</div><?php }
}
