<?php
/* Smarty version 3.1.36, created on 2022-04-15 04:19:28
  from 'C:\wamp64\www\sis_onboarding\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6258f25055e026_49763548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30382c0fe2ee81e7b67f06805526968700bd5f2e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\claves\\templates\\index.tpl',
      1 => 1649569691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6258f25055e026_49763548 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript">
function refrescar() {
var p = window.parent;
p.location.href='../';
}
<?php echo '</script'; ?>
>

</head>
<body ONLOAD="self.setTimeout('refrescar()',5000);">
<center>
<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
><?php echo $_smarty_tpl->tpl_vars['nom_completo']->value;?>
</h3>
<h3 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['nom_completo']->value;?>
</h3>
<br>
<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
</center>
</body>
</html>

<?php }
}
