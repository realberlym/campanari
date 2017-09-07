<?php /* Smarty version Smarty-3.1.19, created on 2017-09-06 22:14:33
         compiled from "C:\xampp\htdocs\campanari\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1170159b08f69026c35-10568000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a60a94b4230d9b0876a3268662882eecdcc072a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1504553669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1170159b08f69026c35-10568000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b08f6902aaa7_84348445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b08f6902aaa7_84348445')) {function content_59b08f6902aaa7_84348445($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
