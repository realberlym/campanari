<?php /* Smarty version Smarty-3.1.19, created on 2017-09-05 19:01:32
         compiled from "C:\xampp\htdocs\campanari\modules\pagseguro\\views\templates\menu\abandoned.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127359af10acb39a64-67119901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d8ab8f9fb261f893ce592cd603c4102c7a0d7ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\modules\\pagseguro\\\\views\\templates\\menu\\abandoned.tpl',
      1 => 1504645270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127359af10acb39a64-67119901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'is_recovery_cart' => 0,
    'adminToken' => 0,
    'urlAdminOrder' => 0,
    'errorMsg' => 0,
    'error_value' => 0,
    'tableResult' => 0,
    'days_recovery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59af10acb51907_99913667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59af10acb51907_99913667')) {function content_59af10acb51907_99913667($_smarty_tpl) {?>﻿
<div class="row">
    <div class="col-md-12">
        <h2 id="title-align"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['titulo']->value,'none');?>
</h2>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['is_recovery_cart']->value) {?>

<input type='hidden' id='adminToken' value='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['adminToken']->value);?>
' />
<input type='hidden' id='urlAdminOrder' value='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['urlAdminOrder']->value);?>
' />

    <?php if ($_smarty_tpl->tpl_vars['errorMsg']->value&&count($_smarty_tpl->tpl_vars['errorMsg']->value)) {?>
    <div class="row">
        <div class="col-md-12">
            <a href="javascript:void(0)" class="pagseguro-button green-theme normal" id="search_abandoned_button"><?php echo smartyTranslate(array('s'=>'Realizar Nova Pesquisa','mod'=>'pagseguro'),$_smarty_tpl);?>
</a>
            <?php  $_smarty_tpl->tpl_vars['error_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_value']->_loop = false;
 $_smarty_tpl->tpl_vars['error_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errorMsg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_value']->key => $_smarty_tpl->tpl_vars['error_value']->value) {
$_smarty_tpl->tpl_vars['error_value']->_loop = true;
 $_smarty_tpl->tpl_vars['error_key']->value = $_smarty_tpl->tpl_vars['error_value']->key;
?>
                <div class="error">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['error_value']->value,'none');?>

                </div>
            <?php } ?>
        </div>
    </div>

    <?php } else { ?>
    <div class="row">
        <div class="col-md-12">
            <a href="javascript:void(0)" class="pagseguro-button green-theme normal" id="search_abandoned_button"><?php echo smartyTranslate(array('s'=>'Pesquisar','mod'=>'pagseguro'),$_smarty_tpl);?>
</a>
            <a href="javascript:void(0)" class="pagseguro-button green-theme normal" id="send_email_button"><?php echo smartyTranslate(array('s'=>'Envio em massa','mod'=>'pagseguro'),$_smarty_tpl);?>
</a>
        </div>
    </div>
    <?php }?>
    <div class="row">
        <div class="col-md-12">
            <table id='htmlgrid_abandoned' class='gridAbandoned abandoned-table' cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="col-md-1 bg-remove">Enviar</th>
                        <th class="col-md-2">Data do Pedido</th>
                        <th class="col-md-3">ID PrestaShop</th>
                        <th class="col-md-2">Validade do link</th>
                        <th class="col-md-1">Enviar e-mail</th>
                        <th class="col-md-1">Visualizar</th>
                        
                    </tr>
                </thead>
                <tbody id="resultTable">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tableResult']->value,'none');?>

                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="6">Validade do(s) link(s) para envio de e-mail:  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['days_recovery']->value,'none');?>
 dias</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="down-foot"></div>
        </div>
    </div>

    <script type="text/javascript">
        
            /****
             * AJAX: Search for Abandoned Transactions
             */
            jQuery('#search_abandoned_button').click(function () {
                blockModal(1);        
                jQuery.ajax({
                    type: "POST",
                    url: '../modules/pagseguro/features/abandoned/abandoned.php',
                    dataType : "html",
                    data: {'getAbandoned':true},
                    success: function(response) {

                        var nResponse = JSON.parse(response);
                        var array = new Array();
                        if ( nResponse.tableResult.length > 0 ) {
                            for (var i = 0; i < nResponse.tableResult.length; i++)
                            {
                                var checkbox = '<input type="checkbox" id="send_'+i+'" name="send_emails[]" value="customer='+nResponse.tableResult[i].customer+'&amp;reference='+nResponse.tableResult[i].reference+'&amp;recovery='+nResponse.tableResult[i].recovery_code+'">';

                                var email = "<a href='javascript:void(0)' onclick='javascript:sendSingleEmail(&quot;customer="+nResponse.tableResult[i].customer+"&amp;reference="+nResponse.tableResult[i].reference+"&amp;recovery="+nResponse.tableResult[i].recovery_code+"&quot;);'> <img src='../img/admin/email.gif' title='Enviar Email'></a>";

                                var visualizar = '<a onclick="editRedirect('+nResponse.tableResult[i].reference+')" style="cursor:pointer"><img src="../img/admin/details.gif" border="0" alt="edit" title="Editar"></a>';

                                array[i] = [[checkbox],[nResponse.tableResult[i].data_add_cart],[nResponse.tableResult[i].masked_reference],[nResponse.tableResult[i].data_expired],[email],[visualizar]];
                            }

                            jQuery('#htmlgrid_abandoned').dataTable().fnClearTable(true);           
                            jQuery('#htmlgrid_abandoned').dataTable().fnAddData(array);
                        } else {
                            jQuery('#htmlgrid_abandoned').dataTable().fnClearTable(true);
                        }
                        blockModal(0);
                    }
                });
                return false;
            });
            
            /****
             * AJAX: Send Single E-mail
             */
            function sendSingleEmail(content) {
                blockModal(1);    
         
                jQuery.ajax({
                    type: "GET",
                    url: '../modules/pagseguro/features/abandoned/ajax-abandoned.php',
                    data: 'action=singleemail&'+content,
                    success: function(response) {
                        blockModal(0);
;
                        jQuery( ".psplugin" ).before(response);
                            
                    }
                });
                return false;
            }

            /****
             * AJAX: Send Multiple E-mails
             */
            jQuery('#send_email_button').click(function () {

                var checkboxValues = new Array();
                jQuery('input[name="send_emails[]"]:checked').each(function() {
                    checkboxValues.push(jQuery(this).val());
                });
                
                if(!checkboxValues.length == 0) {
                    blockModal(1);
                
                    jQuery.ajax({
                        type: "GET",
                        url: '../modules/pagseguro/features/abandoned/ajax-abandoned.php',
                        data: 'action=multiemails&'+jQuery('input[name="send_emails[]"]').serialize(),
                        dataType: 'json',
                        success: function(response) {
                            jQuery( ".psplugin" ).before(response.divError);
                            blockModal(0);
                        },
                        error: function(response) {
                            console.log(response.responseText);
                            jQuery( ".psplugin" ).before(response.responseText);
                            blockModal(0);
                            
                        }
                    });
                } else {
                    jQuery( ".psplugin" ).before('<div class="module_error alert error" style="width: 896px"> Selecione pelo menos um email </div>');
                }
                return false;
            });
            
            /****
             * AJAX: DataTables 
             */
             var i = 0;
            jQuery(document).ready(function(){ 
              var flow = 0;  
              var totalRows = 0;
              jQuery('#htmlgrid_abandoned').dataTable(
                {       
                    "bStateSave": true,    
                    "info": false,
                    "lengthChange": false,
                    "searching": false,
                    "pageLength": 10,
                     "aoColumnDefs": [
                           { 'bSortable': false, 'aTargets': [ 0, 4, 5 ] },
                           { "sClass": "tabela", 'aTargets': [ 0, 1, 2, 3, 4, 5 ] }
                       ],
                   "oLanguage": {
                        "sEmptyTable":"Realize uma pesquisa.",
                        "oPaginate": {
                            "sNext": 'Próximo',
                            "sLast": 'Último',
                            "sFirst": 'Primeiro',
                            "sPrevious": 'Anterior'
                         }
                    },

                    "fnDrawCallback": function(oSettings) {

                        var table = jQuery('#htmlgrid_abandoned').DataTable();
                        var info = table.page.info();

                        var oTable = jQuery('#htmlgrid_abandoned').dataTable();
                        totalRows = oTable.fnGetData().length;

                        if(totalRows >= 11){                                                                        
                            document.getElementById('htmlgrid_abandoned_paginate').style.display = "block";
                            flow = 1;              
                        } else {                                                                                                
                            document.getElementById("htmlgrid_abandoned_paginate").style.display="none";
                            flow = 0;
                        } 

                        if (info.page == 0) {
                            jQuery('a#htmlgrid_abandoned_previous').css('display','none');
                        }       
                        if ((info.page+1) == info.pages) {
                            jQuery('a#htmlgrid_abandoned_next').css('display','none');
                        }       
                        i++;    

                    }    

                });
            });

        
    </script>
  
<?php } else { ?>
    <div class="warn">
        <p class="small text-center">Ative a opção "Recuperação de Carrinho" para poder desfrutar a nova funcionalidade. </p>
    </div>

    <table id="htmlgrid" cellspacing="0" width="100%"></table>
<?php }?>


<?php }} ?>
