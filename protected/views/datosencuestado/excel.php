<?php
$data=$model->getData();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<table border="1">
    <B><CENTER>LISTADO DE ENCUESTADOS</center></B>
    <tr style="background-color: #DF0101; color:#FFFFFF;">
        <th>ESTADO</th>
        <th>MUNICIPIO</th>
        <th>PARROQUIA</th>
        <th>DIRECCIÓN COMPLETA</th>
        <th>SECTOR</th>      
        <th>PUNTO DE REFERENCIA</th>
        <th>PRIMER NOMBRE</th>
        <th>SEGUNDO NOMBRE</th>  
        <th>PRIMER APELLIDO</th> 
        <th>SEGUNDO APELLIDO</th>
        <th>CEDULA</th>
        <th>NACIONALIDAD</th>
        <th>SITUACIÓN LEGAL</th>
        <th>FECHA DE NACIMIENTO</th>      
        <th>LUGAR DE NACIMIENTO</th>
        <th>PARTIDA DE NACIMIENTO</th>
        <th>SEXO</th>
        <th>SE ENCUENTRA EMBARAZADA</th>
        <th>SEMANAS DE EMBARAZO</th>
        <th>ASISTE A CONTROL PRENATAL</th>  
        <th>ESTADO CIVIL</th> 
        <th>INDIGENA</th>
        <th>COMUNIDAD INDIGENA</th>
        <th>CORREO ELECTRÓNICO</th>
        <th>TELÉFONO DE HABITACIÓN</th>
        <th>CELULAR</th>      
        <th>ESTUDIA</th>
        <th>TIPO DE INSTITUCIÓN</th>
        <th>MOTIVO DE NO ESTUDIO</th>  
        <th>NIVEL DE INSTRUCCIÓN</th> 
        <th>CARRERA DE ESTUDIO</th>
        <th>ÚLTIMO AÑO CURSADO</th>  
        <th>TÍTULO OBTENIDO</th> 
        <th>FAMILIAR PRIVADO DE LIBERTAD</th>
        <th>PARENTESCO</th>
        <th>CENTRO PENITENCIARIO</th>
        <th>PERTENECE A UNA ORGANIZACIÓN</th>
        <th>ORGANIZACIÓN SOCIAL</th>      
        <th>PERTENECE A UNA MISIÓN</th>
        <th>MISIÓN SOCIAL</th>
    </tr>
<?php
foreach ($data as $datos)
{    
?>
    <tr>
        <td><?php echo Parroquial::descripcionterritorial($datos['cod_par'],'E'); ?></td>
        <td><?php echo Parroquial::descripcionterritorial($datos['cod_par'],'M'); ?></td>
        <td><?php echo Parroquial::descripcionterritorial($datos['cod_par'],'P'); ?></td>
        <td align="left"><?php echo $datos['dir_com_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['sec_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['pun_ref_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['pri_nom_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['seg_nom_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['pri_ape_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['seg_ape_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['ced_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['nac_dp_enc']; ?></td>
        <td><?php if (trim($datos['sit_leg_dp_enc'])=='N')
        {
                               echo 'Nacionalizado';
        }
        else if (trim($datos['sit_leg_dp_enc'])=='R')
        { 
                               echo 'Residenciado';
        } 
        else
        { 
                               echo 'N/A';
        } 
        ?></td>
        <td align="left"><?php echo $datos['fec_nac_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['lug_nac_dp_enc']; ?></td>
        <td><?php if (trim($datos['par_nac_dp_enc'])=='S')
        {
                               echo 'Si';
        }
        else
        { 
                               echo 'No';
        } 
        ?></td>
        <td align="left"><?php echo $datos['sex_dp_enc']; ?></td>
        <td><?php if (trim($datos['est_emb_dp_enc'])=='S')
        {
                               echo 'Si';
        }
        else if (trim($datos['est_emb_dp_enc'])=='N')
        { 
                               echo 'No';
        } 
        else
        { 
                               echo 'N/A';
        } 
        ?></td>
        <td align="left"><?php echo $datos['sem_emb_dp_enc']; ?></td>
        <td><?php if (trim($datos['asi_ctrl_emb_dp_enc'])=='S')
        {
                               echo 'Si';
        }
        else if (trim($datos['asi_ctrl_emb_dp_enc'])=='N')
        { 
                               echo 'No';
        } 
        else
        { 
                               echo 'N/A';
        } 
        ?></td>
        <td><?php echo Estadocivil::descripcion($datos['cod_est_civ']); ?></td>
        <td><?php if (trim($datos['es_ind_dp_enc'])=='S')
        {
                               echo 'Si';
        }
        else if (trim($datos['es_ind_dp_enc'])=='N')
        { 
                               echo 'No';
        } 
        else
        { 
                               echo 'N/P';
        } 
        ?></td>
        <td><?php echo Comunidadindigena::descripcion($datos['cod_com_ind']); ?></td>
        <td align="left"><?php echo $datos['mail_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['tel_hab_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['tel_cel_dp_enc']; ?></td>
        <td><?php if (trim($datos['est_act_dp_enc'])=='S')
        {
                               echo 'Si';
        }
        else if (trim($datos['est_act_dp_enc'])=='N')
        { 
                               echo 'No';
        }
        else
        { 
                               echo 'N/P';
        } 
        ?></td>
        <td><?php if (trim($datos['tip_ins_dp_enc'])=='P')
        {
                               echo 'Pública';
        }
        else if (trim($datos['tip_ins_dp_enc'])=='PV')
        { 
                               echo 'Privada';
        }
        else
        { 
                               echo 'N/P';
        } 
        ?></td>
        <td><?php echo Motivoestudio::descripcion($datos['cod_mot_est']); ?></td>
        <td><?php echo Nivelinstruccion::descripcion($datos['cod_niv_ins']); ?></td>
        <td><?php echo Carreraestudio::descripcion($datos['cod_car_est']); ?></td>
        <td align="left"><?php echo $datos['ult_gra_cur_dp_enc']; ?></td>
        <td align="left"><?php echo $datos['tit_obt_dp_enc']; ?></td>
        <td><?php if (trim($datos['fam_pri_lib_dp_enc'])=='S')
        {
                               echo 'Si';
        }
        else if (trim($datos['fam_pri_lib_dp_enc'])=='N')
        { 
                               echo 'No';
        }
        else
        { 
                               echo 'N/P';
        } 
        ?></td>
        <td><?php echo Parentescofamiliar::descripcion($datos['cod_par_fam']); ?></td>
        <td><?php echo Centropenitenciario::descripcion($datos['cod_cen_pen']); ?></td>
        <td><?php if (trim($datos['org_soc_dp_enc'])=='S')
        {
                               echo 'Si';
        }
        else if (trim($datos['org_soc_dp_enc'])=='N')
        { 
                               echo 'No';
        }
        else
        { 
                               echo 'N/P';
        } 
        ?></td>
        <td><?php echo Organizacionsocial::descripcion($datos['cod_org_soc']); ?></td>
        <td><?php if (trim($datos['mis_soc_dp_enc'])=='S')
        {
                               echo 'Si';
        }
        else if (trim($datos['mis_soc_dp_enc'])=='N')
        { 
                               echo 'No';
        }
        else
        { 
                               echo 'N/P';
        } 
        ?></td>
        <td><?php echo Misionsocial::descripcion($datos['cod_mis_soc']); ?></td>

    </tr>
<?php    
}    
?>
</table>