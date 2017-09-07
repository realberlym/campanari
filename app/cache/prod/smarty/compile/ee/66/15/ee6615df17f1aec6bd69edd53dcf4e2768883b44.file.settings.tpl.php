<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 19:01:32
         compiled from "C:\xampp\htdocs\campanari\modules\pagseguro\\views\templates\menu\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2123459af10acaa3914-20740454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee6615df17f1aec6bd69edd53dcf4e2768883b44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\modules\\pagseguro\\\\views\\templates\\menu\\settings.tpl',
      1 => 1504645270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2123459af10acaa3914-20740454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'email' => 0,
    'token' => 0,
    'keychartset' => 0,
    'valueschartset' => 0,
    'escolhacharset' => 0,
    'keycheckout' => 0,
    'valuescheckout' => 0,
    'escolhacheckout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59af10acaca896_17876967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af10acaca896_17876967')) {function content_59af10acaca896_17876967($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\campanari\\vendor\\prestashop\\smarty\\plugins\\function.html_options.php';
?>


<div class="row">
    <div class="col-md-12">
		<h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['titulo']->value,'none');?>
</h2>
	</div>
</div>
<div class="row">
    <div class="col-md-6">
		<label>E-MAIL*</label>
		<br>
		    <input type="text" name="pagseguro_email" id="pagseguro_email" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['email']->value);?>
" maxlength="60" hint="Para oferecer o PagSeguro em sua loja é preciso ter uma conta do tipo vendedor ou empresarial. Se você ainda não tem uma conta PagSeguro &lt;a href=&quot;https://pagseguro.uol.com.br/registration/registration.jhtml?ep=5&amp;tipo=cadastro#!vendedor&quot; target=&quot;_blank&quot;&gt; clique aqui &lt;/a&gt;, caso contrário informe neste campo o e-mail associado à sua conta PagSeguro." onchange="validarForm('pagseguro_email')">
		<br>
		<label>TOKEN*</label>
		<br>
		    <input type="text" name="pagseguro_token" id="pagseguro_token" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token']->value);?>
" maxlength="32" hint="Para utilizar qualquer serviço de integração do PagSeguro, é necessário ter um token de segurança. O token é um código único, gerado pelo PagSeguro. Caso não tenha um token &lt;a href=&quot;https://pagseguro.uol.com.br/integracao/token-de-seguranca.jhtml&quot; target=&quot;_blank&quot;&gt; clique aqui &lt;/a&gt;, para gerar." onchange="validarForm('pagseguro_token')">
		<br>
		<label>CHARSET</label>
		<br>
		    <select id="pagseguro_charset" name="pagseguro_charset" class="select" hint="Informe a codificação utilizada pelo seu sistema. Isso irá prevenir que as transações gerem possíveis erros ou quebras ou ainda que caracteres especiais possam ser apresentados de maneira diferente do habitual.">
		            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['keychartset']->value,'output'=>$_smarty_tpl->tpl_vars['valueschartset']->value,'selected'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['escolhacharset']->value,'none')),$_smarty_tpl);?>

		    </select>
		<br>
		<label>CHECKOUT</label>
		<br>
		    <select id="pagseguro_checkout" name="pagseguro_checkout" class="select" hint="No checkout padrão o comprador, após escolher os produtos e/ou serviços, é redirecionado para fazer o pagamento no PagSeguro.">
		            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['keycheckout']->value,'output'=>$_smarty_tpl->tpl_vars['valuescheckout']->value,'selected'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['escolhacheckout']->value,'none')),$_smarty_tpl);?>

		    </select>
		<br>
		<p class="small">* Campos obrigatórios</p>
	</div>
	<div class="col-md-6">
		
		<div class="hintps _config"></div>	
	</div>
</div>

<?php }} ?>
