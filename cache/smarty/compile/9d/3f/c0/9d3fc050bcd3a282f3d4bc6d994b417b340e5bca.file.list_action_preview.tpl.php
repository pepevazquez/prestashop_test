<?php /* Smarty version Smarty-3.1.19, created on 2017-12-18 11:28:42
         compiled from "/Applications/MAMP/htdocs/bk_pepe/prestashop_test/admin817asnjl9/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15372669575a37faca2a8f12-59492650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d3fc050bcd3a282f3d4bc6d994b417b340e5bca' => 
    array (
      0 => '/Applications/MAMP/htdocs/bk_pepe/prestashop_test/admin817asnjl9/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1504544262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15372669575a37faca2a8f12-59492650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a37faca2bf588_62881958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37faca2bf588_62881958')) {function content_5a37faca2bf588_62881958($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
