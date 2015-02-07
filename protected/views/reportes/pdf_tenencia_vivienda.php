<?
$pdf = Yii::createComponent('application.extensions.mpdf.mpdf');
$dataProvider = Reportes::consolidado_tenencia_vivienda();
$data=$dataProvider->getData();

$contador=count($data);
$total=0;
$total1=0;
$total2=0;
$total3=0;
$total4=0;
$total5=0;
$total6=0;
$total7=0;
$total8=0;
$total_tenencia=0;


    $html.=' <link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/mpdf.css" />

    <table align="center"><tr>
    <td align="center"><b>CONSOLIDADO TENENCIA VIVIENDA</b></td>
    </tr></table>

    <br>
        <table  align="center" width="50%" border="1" style="border-collapse: collapse">
            <tr  style="background-color:#F10E1D;">
                <th  width="35%" >&nbsp;ESTADOS</th>
                <th  width="20%" >&nbsp;PROPIA</th>
                <th  width="20%" >&nbsp;ALQUILADA</th>
                <th  width="20%" >&nbsp;PAGANDOSE</th>
                <th  width="20%" >&nbsp;CONSERJE</th>
                <th  width="20%" >&nbsp;CUIDANDO</th>
                <th  width="20%" >&nbsp;PRESTADA</th>
                <th  width="20%" >&nbsp;INVADIDA</th>
                <th  width="20%" >&nbsp;COMODATO</th>
                <th  width="20%" >&nbsp;ALOJAMIENTO</th>
                <th  width="15%" >&nbsp;TOTAL</th>

            </tr>';
         $i=0;
         $val=count($data);
         
         while($i<$val){
            $total+=$data[$i]["total_propia"];
            $total1+=$data[$i]["total_alquilada"];
            $total2+=$data[$i]["total_pagandose"];
            $total3+=$data[$i]["total_conserje"];
            $total4+=$data[$i]["total_cuidando"];
            $total5+=$data[$i]["total_prestada"];
            $total6+=$data[$i]["total_invadida"];
            $total7+=$data[$i]["total_comodato"];
            $total8+=$data[$i]["total_alojamiento"];
            $total_tenencia=$total+$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8;
$html.='
            <tr>
                <td  width="7%" >&nbsp;'.$data[$i]["estado"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_propia"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_alquilada"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_pagandose"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_conserje"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_cuidando"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_prestada"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_invadida"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_comodato"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_alojamiento"].'</td>
                <td align="center" width="7%" >&nbsp;'."".'</td>
            ';
            

                      

    $html.='</tr>'; $i++;
                        }
    $html.=' <tr >
                <th align="left" style="background-color:#F10E1D;" width="7%">&nbsp; TOTAL</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total1.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total2.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total3.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total4.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total5.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total6.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total7.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total8.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total_tenencia.'</th>
            </tr>
                ';
    $html.='</table>';


$mpdf=new mPDF('utf-8','LETTER-L','10','10',9,9,24,10,5,5); // Horizontal
//$mpdf=new mPDF('c','A4','','',26,25,30,47,10,10); 
//$mpdf = new mPDF('utf-8','LETTER','','',15,15,25,12,5,7);
$mpdf->mirrorMargins = 1;   // Use different Odd/Even headers and footers and mirror margins




//$header= '<img  src="'.Yii::app()->baseUrl.'/images/banner-cintillo.png" />';
$footer= '<font size=1>Generado a través del Sistema del Frente Francisco de Miranda {DATE j/m/Y h:m a} por el Usuario ' .Yii::app()->user->name.'</font>';

$mpdf->cacheTables = true;
$mpdf->simpleTables=true;
$mpdf->packTableData=true;
$mpdf->SetHTMLHeader($header); 
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML($html);
$mpdf->Output('Consolidado_Tenencia_Vivienda.pdf','I');


exit;
?>