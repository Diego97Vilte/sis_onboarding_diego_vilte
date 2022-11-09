<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../{$direc_css}" type="text/css">
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
          <h1>GERENTES_PROPIETARIOS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="gerente_nuevo.php">
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
          <th>NRO</th><th>RAZON SOCIAL</th><th>GERENTE</th>
          <th><img src="../../imagenes/modificar.gif" width="20%"></th><th><img src="../../imagenes/borrar.gif" width="20%"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$gerentes_propietarios}
        <tr>
          <td align="center"> {$b} </td>
          <td> {$r.razon_social} </td>
          <td> {$r.nombres} {$r.apellidos}</td>
          <td align="center">
            <form name="formModif {$r.id_gerente_propietario}" method="post" action="usuario_modificar.php">
              <input type="hidden" name="id_gerente_propietario" value="{$r.id_gerente_propietario}">
              <input type="hidden" name="id_empresa" value="{$r.id_empresa}">
              <a href="javascript:document.formModif {$r.id_gerente_propietario}.submit(); " title="Modificar Gerentes">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.id_gerente_propietario}" method="post" action="gerente_eliminar.php">
              <input type="hidden" name="id_gerente_propietario" value="{$r.id_gerente_propietario}">
              <a href="javascript:document.formElimi {$r.id_gerente_propietario}.submit(); " title="Eliminar Gerente" onclick='javascript: return(confirm("Desea realmente Eliminar al gerente ::: {$r.id_gerente_propietario}?"));'>
                Eliminar>>
              </a>
            </form>
          </td>
          {assign var="b" value="`$b+1`"}
          {/foreach}
        </tr>
      </table>
    </center>

  </body>
</html>