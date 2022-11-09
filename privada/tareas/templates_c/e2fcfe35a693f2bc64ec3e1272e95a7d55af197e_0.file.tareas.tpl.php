<?php
/* Smarty version 3.1.36, created on 2022-04-15 04:33:14
  from 'C:\wamp64\www\sis_onboarding\privada\tareas\templates\tareas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6258f58adf85c3_93619659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2fcfe35a693f2bc64ec3e1272e95a7d55af197e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\tareas\\templates\\tareas.tpl',
      1 => 1649997187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6258f58adf85c3_93619659 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

  </head>
  <body>
    <table width="100%" border="0">
      <tr>
        <td width="33%">
          <table border="0">
            <tr>
            </tr>            
          </table>
        </td>
        <td align="center" width="33%">
          <h1>TAREAS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="tarea_nuevo.php">
            <a href="javascript:document.formNuevo.submit();">
              Nuevo>>>
            </a>            
          </form>          
        </td>
      </tr>      
    </table>

    <center>
      <table class="listado">
        <tr>
          <th>NRO</th><th>RAZON SOCIAL</th><th>TAREAS</th><th>FECHA INICIO</th><th>FECHA FIN</th>
          <th><img src="../../imagenes/modificar.gif" width="20%"></th><th><img src="../../imagenes/borrar.gif" width="20%"></th>
        </tr>
        <?php $_smarty_tpl->_assignInScope('b', "1");?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <tr>
          <td align="center"> <?php echo $_smarty_tpl->tpl_vars['b']->value;?>
 </td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['razon_social'];?>
 </td>
          <td> <?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion_actividad'];?>
 </td>
          <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_inicio'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_finalizacion'];?>
</td>
          <td align="center">
            <form name="formModif <?php echo $_smarty_tpl->tpl_vars['r']->value['id_tarea'];?>
" method="post" action="usuario_modificar.php">
              <input type="hidden" name="id_tarea" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tarea'];?>
">
              <input type="hidden" name="id_empresa" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_empresa'];?>
">
              <a href="javascript:document.formModif <?php echo $_smarty_tpl->tpl_vars['r']->value['id_tarea'];?>
.submit(); " title="Modificar Tarea">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi <?php echo $_smarty_tpl->tpl_vars['r']->value['id_tarea'];?>
" method="post" action="tarea_eliminar.php">
              <input type="hidden" name="id_tarea" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tarea'];?>
">
              <a href="javascript:document.formElimi <?php echo $_smarty_tpl->tpl_vars['r']->value['id_tarea'];?>
.submit(); " title="Eliminar Tarea" onclick='javascript: return(confirm("Desea realmente Eliminar al gerente ::: <?php echo $_smarty_tpl->tpl_vars['r']->value['id_tarea'];?>
?"));'>
                Eliminar>>
              </a>
            </form>
          </td>
          <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
      </table>
    </center>

  </body>
</html><?php }
}
