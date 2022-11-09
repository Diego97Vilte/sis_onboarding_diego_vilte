<?php
/* Smarty version 3.1.36, created on 2022-04-15 05:32:12
  from 'C:\wamp64\www\sis_onboarding\privada\tipos_especialidades\templates\tipos_especialidades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6259035c8d8bb6_16445240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae4264b191017d325e9a067e7009b52027e5b629' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_onboarding\\privada\\tipos_especialidades\\templates\\tipos_especialidades.tpl',
      1 => 1650000509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6259035c8d8bb6_16445240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
		<meta http-equiv="Content-type" content="text/html; charset= utf-8"/>
	</head>
	<body>
		<div class="titulo_listado">
			<h1>
				TIPOS ESPECIALIDADES
			</h1>
		</div>
		<div class="titulo_listado">
			<form name="formNuevo" method="post" action="asesor_nuevo.php">
				<a href="javascript:document.formNuevo.submit();">
					Nuevo>>>
				</a>
			</form>
		</div>
		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>ESPECIALIZACION</th>
					<th><img src="../../imagenes/modificar.gif" width= "20%"></th><th><img src="../../imagenes/borrar.jpg" width="20%"></th>
				</tr>
				<?php $_smarty_tpl->_assignInScope('b', "0");?>
				<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
				<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos_especialidades']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<tr>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['especializacion'];?>
</td>
					<td align="center">
						<form name="formModif($r.id_tipo_especialidad)" method="post" action="asesor_modificar.php">
							<input type="hidden" name="id_tipo_especialidad" value="($r.id_tipo_especialidad)">
							<a href="javascript:document.formModif($r.id_tipo_especialidad).submit();" title="Modificar Asesor">
								Modificar>>>
							</a>							
						</form>
					</td>
					<td align="center">
						<form name="formElimi($r.id_tipo_especialidad)" method="post" action="asesor_eliminar.php">
							<input type="hidden" name="id_tipo_especialidad" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo_especialidad'];?>
">
							<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo_especialidad'];?>
.submit();" title="Eliminar Asesor" onclick="javascript:return(confirm(' Desea realmente eliminar a el asesor..?')); location.href='asesor_eliminar.php'">
								Eliminar>>>
							</a>
						</form>
					</td>
					<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
			</table>


			<table>
				<tr align="center">
					<td>
						<?php if (!empty($_smarty_tpl->tpl_vars['urlback']->value)) {?>
						<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlback']->value;?>
'" style="font-family: Verdana; font-size: 9px; cursor: pointer";>&laquo; Anterior</a>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginas']->value, 'pag');
$_smarty_tpl->tpl_vars['pag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pag']->value) {
$_smarty_tpl->tpl_vars['pag']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['pag']->value['npag'] == $_smarty_tpl->tpl_vars['pagina']->value) {?>
									<?php if ($_smarty_tpl->tpl_vars['pagina']->value != '1') {?>|<?php }?> <b style="color:#FB992F; font-size: 12px;"> <?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</b>
									<?php } else { ?>
									|<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['pag']->value['pagV'];?>
'" style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</a>
									<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['numpaginas']->value > $_smarty_tpl->tpl_vars['numbotones']->value && !empty($_smarty_tpl->tpl_vars['urlnext']->value) && $_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['numpaginas']->value) {?>
									| <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlnext']->value;?>
'" style="font-family: Verdana; font-size: 9px; cursor: pointer">Siguinte&raquo;</a>
	
									<?php }?>
					</td>					
				</tr>
			</table>
		</center>
</body>
</html><?php }
}
