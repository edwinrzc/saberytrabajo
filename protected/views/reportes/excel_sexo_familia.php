<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
	<B>CONSOLIDADO DE FAMILIAS POR SEXO</B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th >FEMENINO</th>
        <th >MASCULINO</th>
    </tr>
<?php
foreach ($data as $estado)
{    
?>
    <tr>

        <td><?php echo $estado['estado']; ?></td>
        <td><?php echo $estado['femenino']; ?></td>
        <td><?php echo $estado['masculino']; ?></td>

    </tr>


<?php    
}    
?>
</table>