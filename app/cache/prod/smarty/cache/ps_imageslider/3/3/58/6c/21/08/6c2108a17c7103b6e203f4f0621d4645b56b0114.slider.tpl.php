<?php /*%%SmartyHeaderCode:1574259adacfa65c589-35783056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1504553671,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1574259adacfa65c589-35783056',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59addcb0b2da30_81999028',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59addcb0b2da30_81999028')) {function content_59addcb0b2da30_81999028($_smarty_tpl) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://www.prestashop.com.br">
            <figure>
              <img src="http://13.56.14.158/campanari/modules/ps_imageslider/images/a1371f9982f57feb577443c249c6bcf36c66b466_banner-campanari-1.jpg" alt="Lorem Ipsum dolor siamet">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Lorem Ipsum</h2>
                  <div class="caption-description"><p>Lorem Ipsum dolor siamet</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Carousel buttons">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
<?php }} ?>
