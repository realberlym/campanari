<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 19:01:32
         compiled from "C:\xampp\htdocs\campanari\modules\pagseguro\\views\templates\menu\extras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1568359af10acad3cd1-95493420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5dfa35a480f9f82e629832206cacb6e48d7d0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\modules\\pagseguro\\\\views\\templates\\menu\\extras.tpl',
      1 => 1504645270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1568359af10acad3cd1-95493420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'urlNotification' => 0,
    'urlRedirection' => 0,
    'keylogactive' => 0,
    'valueslogactive' => 0,
    'escolhalogactive' => 0,
    'fileLocation' => 0,
    'keyrecoveryactive' => 0,
    'valuesrecoveryactive' => 0,
    'escolharecoveryactive' => 0,
    'keydaystorecovery' => 0,
    'valuesdaystorecovery' => 0,
    'escolhadaystorecovery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59af10acae6bb7_34789703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af10acae6bb7_34789703')) {function content_59af10acae6bb7_34789703($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\campanari\\vendor\\prestashop\\smarty\\plugins\\function.html_options.php';
?>
<div class="row">
    <div class="col-md-12">
        <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['titulo']->value,'none');?>
</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
 
            <label>URL DE NOTIFICAÇÃO</label>
            <br>
                <input type="text" name="pagseguro_notification_url" id="pagseguro_notification_url" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['urlNotification']->value,'none');?>
" maxlength="255" hint="Sempre que uma transação mudar de status, o PagSeguro envia uma notificação para sua loja ou para a URL que você informar neste campo.">
            <br>
            <label>URL DE REDIRECIONAMENTO</label>
            <br>
                <input type="text" name="pagseguro_url_redirect" id="pagseguro_url_redirect" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['urlRedirection']->value,'none');?>
" maxlength="255" hint="Ao final do fluxo de pagamento no PagSeguro, seu cliente será redirecionado de volta para sua loja ou para a URL que você informar neste campo. Para utilizar essa funcionalidade você deve configurar sua conta para aceitar somente requisições de pagamentos gerados via API. &lt;a href=&quot;https://pagseguro.uol.com.br/integracao/pagamentos-via-api.jhtml&quot; target=&quot;_blank&quot;&gt; Clique aqui &lt;/a&gt; para ativar este serviço.">
            <br>
            <label>LOG</label>
            <br>
                <select id="pagseguro_log" name="pagseguro_log" class="select" hint="Deseja habilitar a geração de log?" >
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['keylogactive']->value,'output'=>$_smarty_tpl->tpl_vars['valueslogactive']->value,'selected'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['escolhalogactive']->value,'none')),$_smarty_tpl);?>

                </select>
            <br>
            <div id="directory-log" name="directory-log">
            <label>DIRETÓRIO</label>
            <br>
                <input type="text" name="pagseguro_log_dir" id="pagseguro_log_dir" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fileLocation']->value,'none');?>
" hint= "Diretório a partir da raíz de instalação do PrestaShop onde se deseja criar o arquivo de log. Ex.: /logs/log_ps.log"/>
            <br>
            </div>
           
	    <div id="abandoned" name="abandoned">	
		
		 <label>LISTAR TRANSAÇÕES ABANDONADAS?</label>
            <br>
                <select id="pagseguro_recovery" name="pagseguro_recovery" class="select" hint="Ao ativar esta funcionalidade, você poderá listar as transações abandonadas e disparar, manualmente, um e-mail para seu comprador. Este e-mail conterá um link que o redirecionará para o fluxo de pagamento, exatamente no ponto onde ele parou." >
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['keyrecoveryactive']->value,'output'=>$_smarty_tpl->tpl_vars['valuesrecoveryactive']->value,'selected'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['escolharecoveryactive']->value,'none')),$_smarty_tpl);?>

                </select>
            <br>
            <div id="directory-val-link" name="directory-val-link">
            <label>TRANSAÇÕES INICIADAS HÁ NO MÁXIMO (dias)</label>
            <br>
                <select id="pagseguro_days_recovery" name="pagseguro_days_recovery" class="select" hint="Somente as transações iniciadas há no máximo a quantidade de dias definidas neste campo serão consideradas para a listagem de recuperação de checkout." >
                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['keydaystorecovery']->value,'output'=>$_smarty_tpl->tpl_vars['valuesdaystorecovery']->value,'selected'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['escolhadaystorecovery']->value,'none')),$_smarty_tpl);?>

                </select>
            <br>
		</div>


            </div>
            
        </div>
	<div class="col-md-6">
		
		<div class="hintps _config"></div>	
	</div>
</div>

<script type="text/javascript">
    
        if ($("select[name=pagseguro_log] option:selected").val() == 0) {
            $("#directory-log").toggle(300);
        }
        if ($("select[name=pagseguro_recovery] option:selected").val() == 0) {
            $("#directory-val-link").toggle(300);
        }
    
</script>
<?php }} ?>
