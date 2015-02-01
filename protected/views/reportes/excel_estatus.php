<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
	<B>CONSOLIDADO PROYECTOS POR ESTATUS</B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th >ACTIVO</th>
        <th >PARALIZADO</th>
        <th >TOTAL</th>
  
    </tr>
<?php
foreach ($data as $estado)
{    
?>
    <tr>

        <td><?php echo $estado['estado']; ?></td>
        <td><?php echo $estado['valor_1']; ?></td>
        <td><?php echo $estado['valor_2']; ?></td>
        <td><?php echo $estado['valor_3']; ?></td>

    </tr>


<?php    
}    
?>
</table>
