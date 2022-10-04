<?php
/* Smarty version 4.2.1, created on 2022-10-04 22:57:18
  from 'D:\programacion\TUDAI\web2\tp1\app\web\template\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c9e2e83a638_42797625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f987bf41de55849c13319be458d46391b551657a' => 
    array (
      0 => 'D:\\programacion\\TUDAI\\web2\\tp1\\app\\web\\template\\error.tpl',
      1 => 1664917002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/web/template/header.tpl' => 1,
    'file:app/web/template/footer.tpl' => 1,
  ),
),false)) {
function content_633c9e2e83a638_42797625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:app/web/template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Error</h1>
<p>404 - Pagina no encontrada</p>
<?php $_smarty_tpl->_subTemplateRender("file:app/web/template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
