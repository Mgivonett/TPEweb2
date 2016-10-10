<?php
/* Smarty version 3.1.30, created on 2016-10-07 22:49:04
  from "C:\xampp\htdocs\web2\TPEweb2\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f80a40f0b751_02178187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9f02006e3d3056ecac6a536fa6e429db7e54979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPEweb2\\templates\\index.tpl',
      1 => 1475873297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:principal.tpl' => 1,
  ),
),false)) {
function content_57f80a40f0b751_02178187 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lista de Peliculas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <?php $_smarty_tpl->_subTemplateRender("file:principal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/peliculas.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
