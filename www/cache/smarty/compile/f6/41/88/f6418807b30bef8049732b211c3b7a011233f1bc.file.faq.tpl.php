<?php /* Smarty version Smarty-3.1.19, created on 2016-04-11 11:54:21
         compiled from "/Applications/MAMP/htdocs/wsf/presta_tp/www/themes/default-bootstrap/faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1527330907570b744d8dda50-27240137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6418807b30bef8049732b211c3b7a011233f1bc' => 
    array (
      0 => '/Applications/MAMP/htdocs/wsf/presta_tp/www/themes/default-bootstrap/faq.tpl',
      1 => 1460367621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1527330907570b744d8dda50-27240137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'questions' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570b744d8f4b63_72414975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570b744d8f4b63_72414975')) {function content_570b744d8f4b63_72414975($_smarty_tpl) {?><div class="panel panel-default">
	<div class="panel-heading">
		<h2>FAQ</h2>
	</div>
</div>

<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['question']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>Question : <?php echo smartyTranslate(array('s'=>((string)$_smarty_tpl->tpl_vars['question']->value)),$_smarty_tpl);?>
</a></h3>
			<p>Réponse : <?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</p>
		</div>
	</div>
<?php } ?><?php }} ?>
