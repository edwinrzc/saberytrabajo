<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
	<B>CONSOLIDADO POR ZONAS DE UBICACIÓN</B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th >URBANIZADA</th>
        <th >NO URBANIZADA</th>
        <th >RURAL</th>
    </tr>
<?php
foreach ($data as $estado)
{    
?>
    <tr>

        <td><?php echo $estado['estado']; ?></td>
        <td><?php echo $estado['urbanizada']; ?></td>
        <td><?php echo $estado['nourbanizada']; ?></td>
        <td><?php echo $estado['rural']?></td>

    </tr>


<?php    
}    
?>
</table>