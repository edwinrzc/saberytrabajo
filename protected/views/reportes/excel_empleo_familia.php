<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
	<B>CONSOLIDADO DE FAMILIAS CON EMPLEO</B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th >SI</th>
        <th >NO</th>
    </tr>
<?php
foreach ($data as $estado)
{    
?>
    <tr>

        <td><?php echo $estado['estado']; ?></td>
        <td><?php echo $estado['si']; ?></td>
        <td><?php echo $estado['noo']; ?></td>

    </tr>


<?php    
}    
?>
</table>
