<?php
$data=$model->getData();

//print_r($data);die;
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
    <B><CENTER>LISTADO DE ENCUESTADOS</center></B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
       <?php 
        
       		print $model->camposTh;
       
       ?>
    </tr>
<?php 
foreach ($data as $datos)
{  
	//print_r(array_filter($datos));die;
    print $model->construyeLinea(array_filter($datos));
    
    	
}	  
?>
</table>