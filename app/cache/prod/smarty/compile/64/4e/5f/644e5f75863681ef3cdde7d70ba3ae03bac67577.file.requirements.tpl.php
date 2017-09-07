<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 19:01:32
         compiled from "C:\xampp\htdocs\campanari\modules\pagseguro\\views\templates\menu\requirements.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132659af10acb5bc41-32396466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644e5f75863681ef3cdde7d70ba3ae03bac67577' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\modules\\pagseguro\\\\views\\templates\\menu\\requirements.tpl',
      1 => 1504645270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132659af10acb5bc41-32396466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'error' => 0,
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59af10acb64855_16499712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af10acb64855_16499712')) {function content_59af10acb64855_16499712($_smarty_tpl) {?>
<style> ul, li { list-style-type: none;} </style>
<div class="row">
    <div class="col-md-12">
		<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['titulo']->value,'none');?>
</h2>
	</div>
</div>
<div class="row">
    <div class="col-md-12">
		<ul>
		    <?php  $_smarty_tpl->tpl_vars['erro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['erro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['erro']->key => $_smarty_tpl->tpl_vars['erro']->value) {
$_smarty_tpl->tpl_vars['erro']->_loop = true;
?>
		    	<li><img src='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['erro']->value[0]);?>
'> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['erro']->value[1],'none');?>
</li>
		    <?php } ?>
		</ul>
	</div>
</div>

<?php }} ?>
