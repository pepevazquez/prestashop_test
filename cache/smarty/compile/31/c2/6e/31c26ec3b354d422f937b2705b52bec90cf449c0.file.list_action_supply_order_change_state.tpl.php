<?php /* Smarty version Smarty-3.1.19, created on 2017-12-18 17:46:28
         compiled from "/Applications/MAMP/htdocs/bk_pepe/prestashop_test/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7776529805a37f0e400c659-98985636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c26ec3b354d422f937b2705b52bec90cf449c0' => 
    array (
      0 => '/Applications/MAMP/htdocs/bk_pepe/prestashop_test/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl',
      1 => 1504544262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7776529805a37f0e400c659-98985636',
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
  'unifunc' => 'content_5a37f0e408b7b3_09978426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37f0e408b7b3_09978426')) {function content_5a37f0e408b7b3_09978426($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-time"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
