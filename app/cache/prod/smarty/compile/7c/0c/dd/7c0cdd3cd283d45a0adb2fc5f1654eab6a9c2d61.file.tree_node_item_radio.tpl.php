<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 18:43:07
         compiled from "C:\xampp\htdocs\campanari\admin360qsfgii\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2726759adbadbaacb95-40808295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c0cdd3cd283d45a0adb2fc5f1654eab6a9c2d61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\admin360qsfgii\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1504553666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2726759adbadbaacb95-40808295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59adbadbabe4f1_69435617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59adbadbabe4f1_69435617')) {function content_59adbadbabe4f1_69435617($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
