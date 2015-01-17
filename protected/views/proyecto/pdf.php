<?php
$pdf = Yii::createComponent('application.extensions.mpdf.mpdf');
//print_r($model);die;

   $html.=' 

<table  align="center"  border="1" style="border-collapse: collapse">

 <tr style="background-color:#D8D8D8;">
        <th>FICHAS DEL PROYECTO</th>         
 </tr>
 </table>

 <table border="1" cellpadding="5" style="border-collapse: collapse">
 <tr>
 		<th  width="100%" >Código PDVSA:</th> 
 		<td align="center" width="100%" >'.$model->cod_pdvsa_pro.'</td> 
 		<th  width="100%" >Nombre del proyecto:</th> 
 		<td align="center" width="100%" >'.$model->nom_pro.'</td>
 		<th  width="100%" >Estatus del proyecto:</th> 
 		<td align="center" width="100%" >'.$model->est_pro.'</td>
</tr>
</table>

 <table border="1" cellpadding="5" style="border-collapse: collapse">
 <tr>
 		<th  width="100%" >Estado:</th> 
 		<td align="center"  width="100%" >'.$model->cod_edo.'</td align="center">
 		<th  width="100%" >Municipio:</th> 
 		<td align="center"  width="100%" >'.$model->cod_mun.'</td align="center">
 		<th  width="100%" >Parroquia:</th> 
 		<td align="center"  width="100%" >'.$model->cod_par.'</td align="center">
</tr>
</table>

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th  width="100%" >Sector:</th> 
 		<td align="center"  width="100%" >'.$model->sec_pro.'</td align="center">
 		<th  width="100%" >Dirección exacta:</th> 
 		<td align="center"  width="100%" >'.$model->dir_exa_pro.'</td align="center">
 		<th  width="100%" >Punto de referencia:</th> 
 		<td align="center"  width="100%" >'.$model->pun_ref_pro.'</td align="center">

 </tr>
</table>

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th  width="100%" >Viviendas Asignadas:</th> 
 		<td align="center"  width="100%" >'.$model->viv_asi_pro.'</td align="center">
 		<th  width="100%" >Latitud:</th> 
 		<td align="center"  width="100%" >'.$model->lat_pro.'</td align="center">
 		<th  width="100%" >Longitud:</th> 
 		<td align="center"  width="100%" >'.$model->lon_pro.'</td align="center">

 </tr>
</table>

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th>Observación:</th> 
 		<td align="center"  width="100%" >'.$model->obs_pro.'</td>

 </tr>
</table>

<br><br>


<table align="center" border="1" cellpadding="5" style="border-collapse: collapse">
 <tr style="background-color:#D8D8D8;">
        <th colspan="2">VIVIENDAS DEL PROYECTO</th>         
 </tr>
<tr style="background-color:#F3975A;">
		<th colspan="2" >Tipo de Construcción</th>
</tr>

<tr style="background-color:#B1CEDA;">
		<th  width="140%" >Tipo de Vivienda</th> 
 		<th  width="100%" >Nº de Vivienda</th> 
 </tr>

<tr>
		<th  width="140%" >Aisladas</th> 
 		<td align="center" width="100%" >'.$model->num_viv_ais_pro.'</td> 
 </tr>

<tr>
		<th  width="140%" >Concentradas</th> 
 		<td align="center" width="100%" >'.$model->num_viv_con_pro.'</td> 
 </tr>

</table>

<br>

<table align="center" border="1" cellpadding="5" style="border-collapse: collapse">
 <tr style="background-color:#D8D8D8;">
        <th colspan="2">VIVIENDAS DEL PROYECTO</th>         
 </tr>
<tr style="background-color:#F3975A;">
		<th colspan="2" >Modalidad Constructiva</th>
</tr>

<tr style="background-color:#B1CEDA;">
		<th  width="140%" >Tipo de Estructura</th> 
 		<th  width="100%" >Nº de Vivienda</th> 
 </tr>

<tr>
		<th  width="140%" >Metalica</th> 
 		<td align="center" width="100%" >'.$model->num_viv_est_met_pro.'</td> 
 </tr>

<tr>
		<th  width="140%" >Tradicional</th> 
 		<td align="center" width="100%" >'.$model->num_viv_est_tra_pro.'</td> 
 </tr>

<tr>
		<th  width="140%" >Mixta</th> 
 		<td align="center" width="100%" >'.$model->num_viv_est_mix_pro.'</td> 
 </tr>

</table>


    ';
    

    


//$mpdf=new mPDF('utf-8','LETTER-L','10','10',9,9,24,10,5,5); // Horizontal
//$mpdf=new mPDF('c','A4','','',26,25,30,47,10,10); 
$mpdf = new mPDF('utf-8','LETTER','','',15,15,25,12,5,7);
$mpdf->mirrorMargins = 1;   // Use different Odd/Even headers and footers and mirror margins




//$header= '<img  src="'.Yii::app()->baseUrl.'/../images/banner-cintillo.png" />';
$footer= '<font size=1>Generado a través del Sistema de FFM {DATE j/m/Y h:m a} por el Usuario: ' .Yii::app()->user->name.' | Fuente: OSTI - 2014 | Licencia: GPL/GNU | Página&nbsp;{PAGENO}&nbsp;/&nbsp;{nbpg}</font>';

$mpdf->SetHTMLHeader($header); 
$mpdf->SetHTMLFooter($footer);
//$mpdf->SetWatermarkImage("/images/logos.jpg");
$mpdf->WriteHTML($html);
$mpdf->Output('Datos.pdf','I');


exit;
?>
