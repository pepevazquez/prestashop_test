<?php /* Smarty version Smarty-3.1.19, created on 2017-12-18 17:47:01
         compiled from "/Applications/MAMP/htdocs/bk_pepe/prestashop_test/themes/default-bootstrap/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17656160335a37f10521ec90-20281594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34af451e6255ea4e0716b9c8a20a20afe026f70d' => 
    array (
      0 => '/Applications/MAMP/htdocs/bk_pepe/prestashop_test/themes/default-bootstrap/search.tpl',
      1 => 1504544262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17656160335a37f10521ec90-20281594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instant_search' => 0,
    'nbProducts' => 0,
    'search_query' => 0,
    'search_tag' => 0,
    'ref' => 0,
    'search_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a37f1056053d9_86904655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37f1056053d9_86904655')) {function content_5a37f1056053d9_86904655($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1
<?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value)&&$_smarty_tpl->tpl_vars['instant_search']->value) {?>id="instant_search_results"<?php }?>
class="page-heading <?php if (!isset($_smarty_tpl->tpl_vars['instant_search']->value)||(isset($_smarty_tpl->tpl_vars['instant_search']->value)&&!$_smarty_tpl->tpl_vars['instant_search']->value)) {?> product-listing<?php }?>">
    <?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
&nbsp;
    <?php if ($_smarty_tpl->tpl_vars['nbProducts']->value>0) {?>
        <span class="lighter">
            "<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif ($_smarty_tpl->tpl_vars['search_tag']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_tag']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif ($_smarty_tpl->tpl_vars['ref']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ref']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
        </span>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value)&&$_smarty_tpl->tpl_vars['instant_search']->value) {?>
        <a href="#" class="close">
            <?php echo smartyTranslate(array('s'=>'Return to the previous page'),$_smarty_tpl);?>

        </a>
    <?php } else { ?>
        <span class="heading-counter">
            <?php if ($_smarty_tpl->tpl_vars['nbProducts']->value==1) {?><?php echo smartyTranslate(array('s'=>'%d result has been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d results have been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }?>
        </span>
    <?php }?>
</h1>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['nbProducts']->value) {?>
	<p class="alert alert-warning">
		<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value) {?>
			<?php echo smartyTranslate(array('s'=>'No results were found for your search'),$_smarty_tpl);?>
&nbsp;"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
		<?php } elseif (isset($_smarty_tpl->tpl_vars['search_tag']->value)&&$_smarty_tpl->tpl_vars['search_tag']->value) {?>
			<?php echo smartyTranslate(array('s'=>'No results were found for your search'),$_smarty_tpl);?>
&nbsp;"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_tag']->value, ENT_QUOTES, 'UTF-8', true);?>
"
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'Please enter a search keyword'),$_smarty_tpl);?>

		<?php }?>
	</p>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value)&&$_smarty_tpl->tpl_vars['instant_search']->value) {?>
        <p class="alert alert-info">
            <?php if ($_smarty_tpl->tpl_vars['nbProducts']->value==1) {?><?php echo smartyTranslate(array('s'=>'%d result has been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d results have been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }?>
        </p>
    <?php }?>
    <div class="content_sortPagiBar">
        <div class="sortPagiBar clearfix <?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value)&&$_smarty_tpl->tpl_vars['instant_search']->value) {?> instant_search<?php }?>">
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php if (!isset($_smarty_tpl->tpl_vars['instant_search']->value)||(isset($_smarty_tpl->tpl_vars['instant_search']->value)&&!$_smarty_tpl->tpl_vars['instant_search']->value)) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>
        </div>
    	<div class="top-pagination-content clearfix">
            <?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php if (!isset($_smarty_tpl->tpl_vars['instant_search']->value)||(isset($_smarty_tpl->tpl_vars['instant_search']->value)&&!$_smarty_tpl->tpl_vars['instant_search']->value)) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_follow'=>1), 0);?>

            <?php }?>
        </div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['search_products']->value), 0);?>

    <div class="content_sortPagiBar">
    	<div class="bottom-pagination-content clearfix">
        	<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        	<?php if (!isset($_smarty_tpl->tpl_vars['instant_search']->value)||(isset($_smarty_tpl->tpl_vars['instant_search']->value)&&!$_smarty_tpl->tpl_vars['instant_search']->value)) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom','no_follow'=>1), 0);?>

            <?php }?>
        </div>
    </div>
<?php }?>
<?php }} ?>
