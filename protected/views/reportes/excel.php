<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
	<B>CONSOLIDADO POR PROYECTOS</B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th >CANT. PROYECTOS</th>
        <th >CANT. VIVIENDAS A CONSTRUIR</th>
        <th >CANT. VIVIENDAS ASIGNADAS</th>
  
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
