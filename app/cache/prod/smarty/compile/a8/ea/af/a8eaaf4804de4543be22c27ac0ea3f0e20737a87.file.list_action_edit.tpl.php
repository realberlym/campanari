<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 19:51:27
         compiled from "C:\xampp\htdocs\campanari\admin360qsfgii\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2030859af1c5f126c95-59571724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8eaaf4804de4543be22c27ac0ea3f0e20737a87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\admin360qsfgii\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1504553666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2030859af1c5f126c95-59571724',
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
  'unifunc' => 'content_59af1c5f12d494_19661194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af1c5f12d494_19661194')) {function content_59af1c5f12d494_19661194($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
