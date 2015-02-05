<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
	<B>CONSOLIDADO TIPOS DE VIVIENDAS</B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th >CASA</th>
        <th >APARTAMENTO</th>
        <th >QUINTA</th>
        <th >RANCHO</th>
        <th >REFUGIO</th>
        <th >OTRO</th>
  
    </tr>
<?php
foreach ($data as $estado)
{    
?>
    <tr>

        <td><?php echo $estado['estado']; ?></td>
        <td><?php echo $estado['total_casa']; ?></td>
        <td><?php echo $estado['total_apto']; ?></td>
        <td><?php echo $estado['total_quinta']; ?></td>
        <td><?php echo $estado['total_rancho']; ?></td>
        <td><?php echo $estado['total_refugio']; ?></td>
        <td><?php echo $estado['total_otro']; ?></td>

    </tr>


<?php    
}    
?>
</table>