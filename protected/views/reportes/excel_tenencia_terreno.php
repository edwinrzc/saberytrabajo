<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
	<B>CONSOLIDADO DE TENENCIA DE TERRENO</B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th >PROPIO</th>
        <th >EJIDO-MUNICIPAL</th>
    </tr>
<?php
foreach ($data as $estado)
{    
?>
    <tr>

        <td><?php echo $estado['estado']; ?></td>
        <td><?php echo $estado['propio']; ?></td>
        <td><?php echo $estado['municipal']; ?></td>

    </tr>


<?php    
}    
?>
</table>