<?php
/* Smarty version 3.1.48, created on 2024-03-09 20:20:53
  from '/var/www/html/admin-dev/themes/default/template/helpers/list/list_action_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ecc4a52e4d41_70876562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b035c3a92c394209c9fb87456ce498eb16d9a5' => 
    array (
      0 => '/var/www/html/admin-dev/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1710008750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ecc4a52e4d41_70876562 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" >
	<i class="icon-search-plus"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
