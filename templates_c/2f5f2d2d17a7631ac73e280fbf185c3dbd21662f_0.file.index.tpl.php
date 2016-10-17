<?php
/* Smarty version 3.1.30, created on 2016-10-14 20:42:51
  from "C:\xampp\htdocs\proyectos\TPEweb2-rama2 (1)\TPEweb2-rama2\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5801272b418749_75013150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5f2d2d17a7631ac73e280fbf185c3dbd21662f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPEweb2-rama2 (1)\\TPEweb2-rama2\\templates\\index.tpl',
      1 => 1476470568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:creacion.tpl' => 1,
  ),
),false)) {
function content_5801272b418749_75013150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lista de Peliculas</title>
  <link rel="stylesheet" href="css/index.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <?php $_smarty_tpl->_subTemplateRender("file:creacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
