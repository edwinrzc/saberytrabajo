<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
	<B>CONSOLIDADO TENENCIA DE VIVIENDAS</B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th >PROPIA</th>
        <th >ALQUILADA</th>
        <th >PAGANDOSE</th>
        <th >CONSERJE</th>
        <th >CUIDANDO</th>
        <th >PRESTADA</th>
        <th >INVADIDA</th>
        <th >COMODATO</th>
        <th >ALOJAMIENTO</th>
  
    </tr>
<?php
foreach ($data as $estado)
{    
?>
    <tr>

        <td><?php echo $estado['estado']; ?></td>
        <td><?php echo $estado['total_propia']; ?></td>
        <td><?php echo $estado['total_alquilada']; ?></td>
        <td><?php echo $estado['total_pagandose']; ?></td>
        <td><?php echo $estado['total_conserje']; ?></td>
        <td><?php echo $estado['total_cuidando']; ?></td>
        <td><?php echo $estado['total_prestada']; ?></td>
        <td><?php echo $estado['total_invadida']; ?></td>
        <td><?php echo $estado['total_comodato']; ?></td>
        <td><?php echo $estado['total_alojamiento']; ?></td>

    </tr>


<?php    
}    
?>
</table>