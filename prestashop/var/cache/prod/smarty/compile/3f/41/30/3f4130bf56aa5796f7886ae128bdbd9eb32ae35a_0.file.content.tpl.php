<?php
/* Smarty version 3.1.48, created on 2024-03-09 18:33:59
  from '/var/www/html/admin069idoquv/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ecab974a3977_65456355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4130bf56aa5796f7886ae128bdbd9eb32ae35a' => 
    array (
      0 => '/var/www/html/admin069idoquv/themes/default/template/content.tpl',
      1 => 1710008750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ecab974a3977_65456355 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
