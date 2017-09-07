<?php /*%%SmartyHeaderCode:2037059adad02aca8f6-42876318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1504553671,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2037059adad02aca8f6-42876318',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59adad02aeb6d5_42803057',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59adad02aeb6d5_42803057')) {function content_59adad02aeb6d5_42803057($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/campanari/br/a-minha-conta" rel="nofollow">
      A sua conta
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">A sua conta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/campanari/br/nota-de-encomenda" title="Créditos" rel="nofollow">
            Créditos
          </a>
        </li>
            <li>
          <a href="http://localhost/campanari/br/enderecos" title="Endereços" rel="nofollow">
            Endereços
          </a>
        </li>
            <li>
          <a href="http://localhost/campanari/br/historico-de-encomendas" title="Pedidos" rel="nofollow">
            Pedidos
          </a>
        </li>
            <li>
          <a href="http://localhost/campanari/br/identidade" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
