<?php /* Smarty version Smarty-3.1.19, created on 2016-04-11 11:41:06
         compiled from "/Applications/MAMP/htdocs/wsf/presta_tp/www/admin238f9oxft/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:705556454570b71328ed958-54389444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f4b411f2d6cc391625c152944b8b408dee1e2b' => 
    array (
      0 => '/Applications/MAMP/htdocs/wsf/presta_tp/www/admin238f9oxft/themes/default/template/content.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '705556454570b71328ed958-54389444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570b71328fffe8_35544379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570b71328fffe8_35544379')) {function content_570b71328fffe8_35544379($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
