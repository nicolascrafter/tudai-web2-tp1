<?php
/* Smarty version 4.2.1, created on 2022-10-04 22:55:35
  from 'D:\programacion\TUDAI\web2\tp1\app\web\template\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c9dc7011143_28540092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80a3f8306e2d8e6ccd9ea3a0aea8d8d201e22993' => 
    array (
      0 => 'D:\\programacion\\TUDAI\\web2\\tp1\\app\\web\\template\\admin.tpl',
      1 => 1664916933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/web/template/header.tpl' => 1,
    'file:app/web/template/footer.tpl' => 1,
  ),
),false)) {
function content_633c9dc7011143_28540092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:app/web/template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Agregar Producto</h2>
<form action="admin/post_product", method="post">
    <label for="name">Nombre</label>
    <input type="text" maxlength="200" name="name">
    <label for="description">Descripcion</label>
    <textarea name="description"></textarea>
    <label for="price">Precio (en centavos)</label>
    <input type="number" name="price">
    <label for="stock">Stock (unidades)</label>
    <input type="number" name="stock">
    <label for="category">Categoria</label>
    <input type="number" name="category">
    <input type="submit">
</form>
<?php $_smarty_tpl->_subTemplateRender("file:app/web/template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
