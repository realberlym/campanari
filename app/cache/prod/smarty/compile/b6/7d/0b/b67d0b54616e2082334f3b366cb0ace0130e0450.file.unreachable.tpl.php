<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 18:54:43
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3131559af0f137059e7-88170414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b67d0b54616e2082334f3b366cb0ace0130e0450' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3131559af0f137059e7-88170414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59af0f13714da7_03117316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af0f13714da7_03117316')) {function content_59af0f13714da7_03117316($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
