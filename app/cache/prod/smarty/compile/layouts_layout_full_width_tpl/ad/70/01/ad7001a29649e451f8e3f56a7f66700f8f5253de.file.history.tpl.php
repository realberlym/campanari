<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\customer\history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799159addcc64ea8a3-43554453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad7001a29649e451f8e3f56a7f66700f8f5253de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\customer\\history.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    'a36d7fe57b9db2f7653fa7e2c64eb032fa4b8772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\customer\\page.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    '3b983ebcc9d2a5df3a9f60999a0a21851e86726a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\page.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    'de3f2782483967168e3f7de0269441a33c0da49a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\layouts\\layout-full-width.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    '9d2646d9c2c74aaf36b35d2741f006267fb36b08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    'ccefa54ef98257cee18df97a97422f74abb73bcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\_partials\\stylesheets.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    '6ab19b54a85df57e02d2cab098aa2a2df884995b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\_partials\\javascript.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    'e69681e0d8957ed70a55a8951f6751e6d124c033' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\_partials\\head.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    '01385548a11880c7395d422be938d9b3acd6310f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    '0f736071c173200c7c5950c172546e4d14597c62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\_partials\\header.tpl',
      1 => 1501814265,
      2 => 'file',
    ),
    '9888b80bbd6938de271c24accd805a669f32e60d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\_partials\\notifications.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    '4809f7eb2bcb93b6445427adacb776cadd875d9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\_partials\\breadcrumb.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    'ffb915c9aaced34c7675cbbe06991c3ec5c3c299' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\customer\\_partials\\my-account-links.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
    '16fd051f1754160381c2ea348f318da616210042' => 
    array (
      0 => 'C:\\xampp\\htdocs\\campanari\\themes\\classic\\templates\\_partials\\footer.tpl',
      1 => 1500495310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1799159addcc64ea8a3-43554453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59addcc6756db2_79401723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59addcc6756db2_79401723')) {function content_59addcc6756db2_79401723($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1799159addcc64ea8a3-43554453');
content_59addcc65943a6_42926350($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1799159addcc64ea8a3-43554453');
content_59addcc65fb1d8_90826950($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      

      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1799159addcc64ea8a3-43554453');
content_59addcc6606187_90410135($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>

      

      <section id="wrapper">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

        <div class="container">
          
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1799159addcc64ea8a3-43554453');
content_59addcc6642104_46593148($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          

          

          
  <div id="content-wrapper">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    

  <section id="main">

    
      
        <header class="page-header">
          <h1>
  <?php echo smartyTranslate(array('s'=>'Order history','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

</h1>
        </header>
      
    

    
  <section id="content" class="page-content">
    
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1799159addcc64ea8a3-43554453');
content_59addcc66180a3_13133016($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
    
    
  <h6><?php echo smartyTranslate(array('s'=>'Here are the orders you\'ve placed since your account was created.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</h6>

  <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <table class="table table-striped table-bordered table-labeled hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo smartyTranslate(array('s'=>'Order reference','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Date','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Total price','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th class="hidden-md-down"><?php echo smartyTranslate(array('s'=>'Payment','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th class="hidden-md-down"><?php echo smartyTranslate(array('s'=>'Status','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Invoice','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
          <tr>
            <th scope="row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</th>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-xsright"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="hidden-md-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['payment'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td>
              <span
                class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'], ENT_QUOTES, 'UTF-8');?>
"
                style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['color'], ENT_QUOTES, 'UTF-8');?>
"
              >
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>

              </span>
            </td>
            <td class="text-sm-center hidden-md-down">
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE415;</i></a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
            <td class="text-sm-center order-actions">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details">
                <?php echo smartyTranslate(array('s'=>'Details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

              </a>
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
              <?php }?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <div class="orders hidden-md-up">
      <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
        <div class="order">
          <div class="row">
            <div class="col-xs-10">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
"><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</h3></a>
              <div class="date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="status">
                <span
                  class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'], ENT_QUOTES, 'UTF-8');?>
"
                  style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['color'], ENT_QUOTES, 'UTF-8');?>
"
                >
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </div>
            </div>
            <div class="col-xs-2 text-xsright">
                <div>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details" title="<?php echo smartyTranslate(array('s'=>'Details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
">
                    <i class="material-icons">&#xE8B6;</i>
                  </a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                  <div>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
">
                      <i class="material-icons">&#xE863;</i>
                    </a>
                  </div>
                <?php }?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  <?php }?>

  </section>


    
      <footer class="page-footer">
        
  
    <?php /*  Call merged included template "customer/_partials/my-account-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1799159addcc64ea8a3-43554453');
content_59addcc66bf613_19715894($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/my-account-links.tpl" */?>
  

      </footer>
    

  </section>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


          
        </div>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1799159addcc64ea8a3-43554453');
content_59addcc6741189_31374900($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '1799159addcc64ea8a3-43554453');
content_59addcc65d6468_69039689($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\_partials\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc65943a6_42926350')) {function content_59addcc65943a6_42926350($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '1799159addcc64ea8a3-43554453');
content_59addcc65c25f3_67336658($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '1799159addcc64ea8a3-43554453');
content_59addcc65d6468_69039689($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\_partials\stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc65c25f3_67336658')) {function content_59addcc65c25f3_67336658($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\_partials\javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc65d6468_69039689')) {function content_59addcc65d6468_69039689($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\catalog\_partials\product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc65fb1d8_90826950')) {function content_59addcc65fb1d8_90826950($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\_partials\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc6606187_90410135')) {function content_59addcc6606187_90410135($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>



  <nav class="header-nav">
    <div class="container">
        <div class="row">
          <div class="hidden-sm-down">
            <div class="col-md-4 col-xs-12">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

            </div>
            <div class="col-md-8 right-nav">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

            </div>
          </div>
          <div class="hidden-md-up text-sm-center mobile">
            <div class="float-xs-left" id="menu-icon">
              <i class="material-icons d-inline">&#xE5D2;</i>
            </div>
            <div class="float-xs-right" id="_mobile_cart"></div>
            <div class="float-xs-right" id="_mobile_user_info"></div>
            <div class="top-logo" id="_mobile_logo"></div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div>
  </nav>



  <div class="header-top">
    <div class="container">

      <div class="row">
        <div class="col-md-4 hidden-sm-down" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="col-md-8 col-sm-12 position-static">
          <div class="row">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySearch'),$_smarty_tpl);?>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>

       <div class="row">
        <div class="col-sm-12 position-static">
          <div class="row menu-topo">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\_partials\notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc66180a3_13133016')) {function content_59addcc66180a3_13133016($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\_partials\breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc6642104_46593148')) {function content_59addcc6642104_46593148($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </li>
      
    <?php } ?>
  </ol>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\customer\_partials\my-account-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc66bf613_19715894')) {function content_59addcc66bf613_19715894($_smarty_tpl) {?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo smartyTranslate(array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo smartyTranslate(array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
  </a>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-04 21:07:50
         compiled from "C:\xampp\htdocs\campanari\themes\classic\templates\_partials\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59addcc6741189_31374900')) {function content_59addcc6741189_31374900($_smarty_tpl) {?>
<div class="container">
  <div class="row">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          
            <a class="_blank" href="http://www.prestashop.com" target="_blank">
              <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

            </a>
          
        </p>
      </div>
    </div>
  </div>
</div>
<?php }} ?>