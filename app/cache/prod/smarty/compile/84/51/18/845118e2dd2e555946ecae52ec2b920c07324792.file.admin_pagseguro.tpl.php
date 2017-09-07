<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 19:01:32
         compiled from "C:\xampp\htdocs\campanari\modules\pagseguro\views\templates\front\admin_pagseguro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2729559af10acb6c200-72890597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '845118e2dd2e555946ecae52ec2b920c07324792' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\modules\\pagseguro\\views\\templates\\front\\admin_pagseguro.tpl',
      1 => 1504645270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2729559af10acb6c200-72890597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'css_version' => 0,
    'cheats' => 0,
    'action_post' => 0,
    'tab' => 0,
    'li' => 0,
    'div' => 0,
    'menu_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59af10acb98bb2_17069453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af10acb98bb2_17069453')) {function content_59af10acb98bb2_17069453($_smarty_tpl) {?>

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'none');?>
assets/css/jquery.dataTables.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['css_version']->value,'none');?>
" />
<?php if ($_smarty_tpl->tpl_vars['cheats']->value) {?>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'none');?>
assets/css/firefox-cheats.css" />
<?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'none');?>
assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'none');?>
assets/js/jquery.blockUI.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'none');?>
assets/js/jquery-1102.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'none');?>
assets/js/jquery.dataTables.js"></script>

<form class="psplugin" id="psplugin" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action_post']->value,'none');?>
" method="POST">
    <h1>
        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'none');?>
assets/images/logops_228x56.png" />
        <span class="btn-register">
            <a href="https://pagseguro.uol.com.br/registration/registration.jhtml?ep=5&tipo=cadastro#!vendedor" target="_blank" class="pagseguro-button green-theme normal">
                <?php echo smartyTranslate(array('s'=>'Faça seu cadastro','mod'=>'pagseguro'),$_smarty_tpl);?>

            </a>
        </span>
    </h1>    
    <ul id="menuTab">
    <?php  $_smarty_tpl->tpl_vars['li'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['li']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['li']->key => $_smarty_tpl->tpl_vars['li']->value) {
$_smarty_tpl->tpl_vars['li']->_loop = true;
?>
        <li id="menuTab<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['li']->value['tab'],'htmlall','UTF-8');?>
" class="menuTabButton <?php if ($_smarty_tpl->tpl_vars['li']->value['selected']) {?>selected<?php }?>"><?php if ($_smarty_tpl->tpl_vars['li']->value['icon']!='') {?><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['li']->value['icon'],'htmlall','UTF-8');?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['li']->value['title'],'htmlall','UTF-8');?>
"/><?php }?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['li']->value['title'],'htmlall','UTF-8');?>
</li>
    <?php } ?>
    </ul>
    <div id="tabList">
    <?php  $_smarty_tpl->tpl_vars['div'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['div']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['div']->key => $_smarty_tpl->tpl_vars['div']->value) {
$_smarty_tpl->tpl_vars['div']->_loop = true;
?>
        <div id="menuTab<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['div']->value['tab'],'htmlall','UTF-8');?>
Sheet" class="tabItem <?php if ($_smarty_tpl->tpl_vars['div']->value['selected']) {?>selected<?php }?>">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['div']->value['content'],'none');?>

        </div>
    <?php } ?>
    </div>

    <div id="divSalvar">
        <p class="center" id="pSalvar">
        	<input type="submit" id='update' class='pagseguro-button green-theme normal' name='btnSubmit' value="Salvar" />
        </p>
    </div>

	<input type='hidden' id='hiddenMenuTab' name='menuTab' value='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu_tab']->value,"none");?>
' />

</form>
<br>
<script type="text/javascript">
    

        jQuery( document ).ready(function() {
            jQuery('#content').removeClass("nobootstrap"); 
            jQuery('#content').addClass("nobootstrap-ps"); 
        });

        var tip = 'O botão salvar só será habilitado quando os campos E-mail e Token forem preenchidos.';

        if(document.getElementById('pagseguro_email').value.length == ""){

                document.getElementById("pSalvar").innerHTML = "<a data-tooltip='"+this.tip+"' id='tooltip'><button id='update' class='pagseguro-button green-theme normal' name='btnSubmit' disabled />Salvar</button></a>";

        }

        if(document.getElementById('pagseguro_token').value.length == ""){

                document.getElementById("pSalvar").innerHTML = "<a data-tooltip='"+this.tip+"' id='tooltip'><button id='update' class='pagseguro-button green-theme normal' name='btnSubmit' disabled />Salvar</button></a>";

        }

        function validarForm(formInput){ 

            if (formInput == "pagseguro_email")
            {
                var nInput = 'pagseguro_token';
            } else {
                var nInput = 'pagseguro_email';
            }

            if(document.getElementById(formInput).value.length == ""){

                document.getElementById("pSalvar").innerHTML = "<a data-tooltip='"+this.tip+"' id='tooltip'><button id='update' class='pagseguro-button green-theme normal' name='btnSubmit' disabled />Salvar</button></a>";

            } else if( (document.getElementById(formInput).value.length != "") & (document.getElementById(nInput).value.length != "")) {
                 document.getElementById('update').disabled=false;
                 document.getElementById("pSalvar").innerHTML = "<button id='update' class='pagseguro-button green-theme normal' name='btnSubmit' />Salvar</button>";
            }
        }

        var url = location.href;  
        var baseURL = url.substring(0, url.indexOf('/', 18));
        var paginaAtual = 1;
        var menuTab = 'menuTab1';

        
        jQuery('.menuTabButton').on('click',
            function () {
                jQuery('.menuTabButton.selected').removeClass('selected');
                jQuery(this).addClass('selected');
                jQuery('.tabItem.selected').removeClass('selected');
                jQuery('#' + this.id + 'Sheet').addClass('selected');
                menuTab = this.id;
                document.getElementById('menuTab').value = menuTab;
                jQuery("input[name=menuTab]").val(menuTab);
                hideInput(this.id);
        });

        
        function hideInput(menuTab) {

            if (menuTab == 'menuTab2') {
                if (jQuery('select#pagseguro_log').val() == '0') {
                    if(jQuery('#directory-log').is(':visible')) {
                         jQuery('#directory-log').hide();
                     }
                }
                if (jQuery('select#pagseguro_recovery').val() == '0') {
                    if(jQuery('#directory-val-link').is(':visible')) {
                        jQuery('#directory-val-link').hide();
                    }
                }
            }
        }

        jQuery('#pagseguro_log').on('change',
            function(e) {
                jQuery('#directory-log').toggle(300);
            }
        );

        jQuery('#pagseguro_recovery').on('change',
            function(e) {
                jQuery('#directory-val-link').toggle(300);
            }
        );
        
        function blockModal(block) {
            if(block == 1) {
                jQuery.blockUI({
                    message: '<h1>Carregando '+'<img class="blockUImg" src="../modules/pagseguro/assets/images/loading.gif" />'+'</h1>',
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#4f7743',
                        'border-radius': '10px',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        color: '#90e874'
                    },
                    overlayCSS: { backgroundColor: 'gray' }
                });
            } else {
                setTimeout(jQuery.unblockUI, 1000);
            }
        }
        
        jQuery("input[name = 'search']").on('click',
            function() {
                blockModal(1);
                reloadTable();             
        });

        function reloadTable() {

                jQuery.ajax({
                    type: 'POST',
                    url: '../modules/pagseguro/features/conciliation/conciliation.php',
                    dataType : "json",
                    data: {dias: jQuery('#pagseguro_dias_btn').val()},
                    success: function(result) {
                        if (result != "") {
                            jQuery('#htmlgrid').dataTable().fnClearTable(true);           
                            jQuery('#htmlgrid').dataTable().fnAddData(result);
                            jQuery('#htmlgrid').dataTable()._fnInitComplete();
                        }

                        blockModal(0);
                    },
                    error: function() {
                        blockModal(0);
                    }
                });
        }
        
        function editRedirect(rowId){
            var token = jQuery('#adminToken').val();
            var url = jQuery('#urlAdminOrder').val();

            window.open(url + '&id_order='+rowId+'&vieworder&token='+token);
            
        }
        
        function duplicateStatus(rowId,rowIdStatusPagSeg,rowIdStatusPreShop){

            if(rowIdStatusPagSeg != rowIdStatusPreShop && rowIdStatusPagSeg != ""){
                blockModal(1);
                jQuery.ajax({
                    type: 'POST',
                    url: '../modules/pagseguro/features/conciliation/conciliation.php',
                    data: {idOrder: rowId, newIdStatus: rowIdStatusPagSeg, orderDays: jQuery('#pagseguro_dias_btn').val() },
                    success: function(result) {

                        reloadTable();
                    },
                    error: function() {
                        blockModal(0);
                        alert('Não foi possível corrigir o Status.\nTente novamente');
                    }
                });
            }
        }

        jQuery('#pagseguro_checkout').on('change',
            function(e) {
                if(jQuery('option:selected', this).attr('value') == 0) {
                    jQuery('#pagseguro_checkout').attr('hint','No checkout padrão o comprador, após escolher os produtos e/ou serviços, é redirecionado para fazer o pagamento no PagSeguro.');
                } else {          
                    jQuery('#pagseguro_checkout').attr('hint','No checkout lightbox o comprador, após escolher os produtos e/ou serviços, fará o pagamento em uma janela que se sobrepõe a sua loja.');
                }
                jQuery('#pagseguro_checkout').focus();
            }
        );

        jQuery('input, select').on('focus',
            function(e) {
                _jQuerythis = jQuery(this);
                jQuery(this).addClass('focus');
                jQuery(this).parent().parent().find('.hintps').fadeOut(210, function() {
                    jQuery(this).html(_jQuerythis.attr('hint')).fadeIn(210);
                });
            }
        );

        jQuery('input, select').on('blur',
            function(e) {
                jQuery(this).removeClass('focus');
            }
        );
        
        jQuery(".tab").on('click',
            function(e){
                jQuery(this).parent().parent().find('.hintps').fadeOut(5);
        });

        jQuery('.alert, .conf').insertBefore('#mainps');

        jQuery('.alert, .conf').on('click',
            function() {
                    jQuery(this).fadeOut(450);
            }
        );

        setTimeout(function() {
            jQuery('.conf').fadeOut(450);
        }, 3000);

    
</script>
<?php }} ?>
