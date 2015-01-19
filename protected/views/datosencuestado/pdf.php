<?php
$pdf = Yii::createComponent('application.extensions.mpdf.mpdf');

//print_r($model_empleado);die;

   $html.=' 

<table  align="center"  border="1" style="border-collapse: collapse">

 <tr style="background-color:#D8D8D8;">
        <th>DATOS PERSONALES</th>         
 </tr>
 </table>

 <table border="1" cellpadding="5" style="border-collapse: collapse">
 <tr>
 		<th  width="100%" >Estado:</th> 
 		<td align="center" width="100%" >----------</td> 
 		<th  width="100%" >Municipio:</th> 
 		<td align="center" width="100%" >----------</td>
 		<th  width="100%" >Parroquia:</th> 
 		<td align="center" width="100%" >----------</td>
</tr>
</table>

 <table border="1" cellpadding="5" style="border-collapse: collapse">
 <tr>
 		<th  width="100%" >Sector:</th> 
 		<td align="center"  width="100%" >'.$model->sec_dp_enc.'</td align="center">
 		<th  width="100%" >Punto de Referencia:</th> 
 		<td align="center"  width="100%" >'.$model->pun_ref_dp_enc.'</td align="center">
</tr>
</table>

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th  width="100%" >Primer Nombre:</th> 
 		<td align="center"  width="100%" >'.$model->pri_nom_dp_enc.'</td align="center">
 		<th  width="100%" >Segundo Nombre:</th> 
 		<td align="center"  width="100%" >'.$model->seg_nom_dp_enc.'</td align="center">
 		<th  width="100%" >Primer Apellido:</th> 
 		<td align="center"  width="100%" >'.$model->pri_ape_dp_enc.'</td align="center">

 </tr>
</table>

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
 		<th  width="100%" >Segundo Apellido:</th> 
 		<td align="center"  width="100%" >'.$model->seg_ape_dp_enc.'</td align="center">
		<th  width="10%" >Cedula:</th> 
 		<td align="center" width="100%" >'.$model->ced_dp_enc.'</td>
 		<th  width="10%" >Nacionalidad:</th> 
 		<td align="center" width="100%" >'.$model_nacionalidad->nom_nac_enc.'</td>

 </tr>
</table>   

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
 		<th  width="10%" >Situacion Legal:</th> 
 		<td align="center" width="10%" >'.$model->sit_leg_dp_enc.'</td>
 		<th  width="10%" >Fecha de Nacimiento:</th> 
 		<td align="center" width="10%" >'.$model->fec_nac_dp_enc.'</td>

		<th  width="10%" >Lugar de Nacimiento:</th> 
 		<td align="center" width="10%" >'.$model->lug_nac_dp_enc.'</td>

 		
 </tr>
</table>  

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
 		<th  width="10%" >Partida de Nacimiento:</th> 
 		<td align="center" width="10%" >'.$model->par_nac_dp_enc.'</td>
		<th  width="10%" >Sexo:</th> 
 		<td align="center" width="10%" >'.$model->sex_dp_enc.'</td>
 		<th  width="10%" >Se encuentra embarazada:</th> 
 		<td align="center" width="10%" >'.$model->est_emb_dp_enc.'</td>

 </tr>
</table>   

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
 		<th  width="10%" >Semanas de embarazada:</th> 
 		<td align="center" width="10%" >'.$model->sem_emb_dp_enc.'</td>
 		<th  width="10%" >Asiste a control prenatal:</th> 
 		<td align="center" width="10%" >'.$model->asi_ctrl_emb_dp_enc.'</td>
 		<th  width="10%" >Estado civil:</th> 
 		<td align="center" width="10%" >'.$model_estadocivil->nom_est_civ.'</td>
</table> 


<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th  width="10%" >�Es indigena?:</th> 
 		<td align="center" width="10%" >'.$model->es_ind_dp_enc.'</td>
 		<th  width="10%" >Comunidad indigena:</th> 
 		<td align="center" width="10%" >'.$model_indigena->nom_com_ind.'</td>
 		
 		
 </tr>
</table>  

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th  width="10%" >Correo electronico:</th> 
 		<td align="center" width="10%" >'.$model->mail_dp_enc.'</td>
 		<th  width="10%" >Tel. Habitaci�n:</th> 
 		<td align="center" width="10%" >'.$model->tel_hab_dp_enc.'</td>
 </tr>
</table>  

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		
 		<th  width="10%" >Celular:</th> 
 		<td align="center"  width="10%" >'.$model->tel_cel_dp_enc.'</td>
 		<th  width="10%" >�Estudia actualmente?:</th> 
 		<td align="center"  width="10%" >'.$model->est_act_dp_enc.'</td>
 		<th  width="10%" >Tipo de institucion:</th> 
 		<td align="center"  width="10%" >'.$model->tip_ins_dp_enc.'</td>
</tr>
</table> 

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
 		<th  width="10%" >Motivo de no estudio:</th> 
 		<td align="center"  width="10%" >'.$model_motivoestudio->nom_mot_est.'</td>
 		<th  width="10%" >Nivel de Instruccion:</th> 
 		<td align="center"  width="10%" >'.$model_nivelestudio->nom_niv_ins.'</td>
 </tr>
</table>  

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		
 		<th  width="10%" >Carrera de Estudio:</th> 
 		<td align="center"  width="10%" >'.$model_carreraestudio->nom_car_est.'</td>
 		<th  width="10%" >Ultimo a�o cursado:</th> 
 		<td align="center"  width="10%" >'.$model->ult_gra_cur_dp_enc.'</td>
 		<th  width="10%" >Titulo Obtenido:</th> 
 		<td align="center"  width="10%" >'.$model->tit_obt_dp_enc.'</td>
 </tr>
</table> 

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th  width="10%" >Familiar privado de libertad:</th> 
 		<td align="center"  width="10%" >'.$model->fam_pri_lib_dp_enc.'</td>
 		<th  width="10%" >Parentesco:</th> 
 		<td align="center"  width="10%" >'.$model_parentesco->nom_par_fam.'</td>
 		
 		
 </tr>
</table>


<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th  width="10%" >Centro Penitenciario:</th> 
 		<td align="center"  width="10%" >'.$model_penitenciaria->nom_cen_pen.'</td>
		<th  width="10%" >�Pertenece a una organizaci�n?:</th> 
 		<td align="center"  width="10%" >'.$model->org_soc_dp_enc.'</td>
 </tr>
</table>

<table border="1" cellpadding="5" style="border-collapse: collapse">
<tr>
		<th  width="10%" >Organizaci�n social:</th> 
 		<td align="center"  width="10%" >'.$model_organizacion->nom_org_soc.'</td>
 		<th  width="10%" >�Pertene a una misi�n?:</th> 
 		<td align="center"  width="10%" >'.$model->mis_soc_dp_enc.'</td>
 		<th  width="10%" >Misi�n social:</th> 
 		<td align="center"  width="10%" >'.$model_mision->nom_mis_soc.'</td>
 </tr>
</table>

    ';
    

    


//$mpdf=new mPDF('utf-8','LETTER-L','10','10',9,9,24,10,5,5); // Horizontal
//$mpdf=new mPDF('c','A4','','',26,25,30,47,10,10); 
$mpdf = new mPDF('utf-8','LETTER','','',15,15,25,12,5,7);
$mpdf->mirrorMargins = 1;   // Use different Odd/Even headers and footers and mirror margins




$header= '<img  src="'.Yii::app()->baseUrl.'/../images/banner-cintillo.png" />';
$footer= '<font size=1>Generado a trav�s del Sistema de FFM {DATE j/m/Y h:m a} por el Usuario: ' .Yii::app()->user->name.' | Fuente: OSTI - 2014 | Licencia: GPL/GNU | P�gina&nbsp;{PAGENO}&nbsp;/&nbsp;{nbpg}</font>';

$mpdf->SetHTMLHeader($header); 
$mpdf->SetHTMLFooter($footer);
//$mpdf->SetWatermarkImage("/images/logos.jpg");
$mpdf->WriteHTML($html);
$mpdf->Output('Datos.pdf','I');


exit;
?>
