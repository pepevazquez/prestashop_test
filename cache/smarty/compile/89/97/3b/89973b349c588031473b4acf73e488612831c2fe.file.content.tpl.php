<?php /* Smarty version Smarty-3.1.19, created on 2017-12-18 11:33:20
         compiled from "/Applications/MAMP/htdocs/bk_pepe/prestashop_test/admin817asnjl9/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1772893815a37fbe0b1c6d4-59074022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89973b349c588031473b4acf73e488612831c2fe' => 
    array (
      0 => '/Applications/MAMP/htdocs/bk_pepe/prestashop_test/admin817asnjl9/themes/default/template/controllers/localization/content.tpl',
      1 => 1504544262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1772893815a37fbe0b1c6d4-59074022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a37fbe0bc48f8_74799196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37fbe0bc48f8_74799196')) {function content_5a37fbe0bc48f8_74799196($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
