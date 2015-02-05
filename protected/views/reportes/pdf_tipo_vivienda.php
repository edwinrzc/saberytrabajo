<?
$pdf = Yii::createComponent('application.extensions.mpdf.mpdf');
$dataProvider = Reportes::consolidado_tipo_vivienda();
$data=$dataProvider->getData();

$contador=count($data);
$total=0;
$total1=0;
$total2=0;
$total3=0;
$total4=0;
$total5=0;
$total_tipo=0;


    $html.=' <link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/mpdf.css" />

    <table align="center"><tr>
    <td align="center"><b>CONSOLIDADO POR TIPOS DE VIVIENDA</b></td>
    </tr></table>

    <br>
        <table  align="center" width="45%" border="1" style="border-collapse: collapse">
            <tr  style="background-color:#F10E1D;">
                <th  width="40%" >&nbsp;ESTADOS</th>
                <th  width="25%" >&nbsp;CASA</th>
                <th  width="25%" >&nbsp;APTO</th>
                <th  width="25%" >&nbsp;QUINTA</th>
                <th  width="25%" >&nbsp;RANCHO</th>
                <th  width="25%" >&nbsp;REFUGIO</th>
                <th  width="25%" >&nbsp;OTRO</th>
                <th  width="25%" >&nbsp;TOTAL</th>

            </tr>';
         $i=0;
         $val=count($data);
         
         while($i<$val){
            $total+=$data[$i]["total_casa"];
            $total1+=$data[$i]["total_apto"];
            $total2+=$data[$i]["total_quinta"];
            $total3+=$data[$i]["total_rancho"];
            $total4+=$data[$i]["total_refugio"];
            $total5+=$data[$i]["total_otro"];
            $total_tipo=$total+$total1+$total2+$total3+$total4+$total5;
$html.='
            <tr>
                <td  width="7%" >&nbsp;'.$data[$i]["estado"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_casa"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_apto"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_quinta"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_rancho"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_refugio"].'</td>
                <td align="center" width="7%" >&nbsp;'.$data[$i]["total_otro"].'</td>
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
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total_tipo.'</th>
            </tr>
                ';
    $html.='</table>';


//$mpdf=new mPDF('utf-8','LETTER-L','10','10',9,9,24,10,5,5); // Horizontal
//$mpdf=new mPDF('c','A4','','',26,25,30,47,10,10); 
$mpdf = new mPDF('utf-8','LETTER','','',15,15,25,12,5,7);
$mpdf->mirrorMargins = 1;   // Use different Odd/Even headers and footers and mirror margins




//$header= '<img  src="'.Yii::app()->baseUrl.'/images/banner-cintillo.png" />';
$footer= '<font size=1>Generado a través del Sistema del Frente Francisco de Miranda {DATE j/m/Y h:m a} por el Usuario ' .Yii::app()->user->name.'</font>';

$mpdf->SetHTMLHeader($header); 
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML($html);
$mpdf->Output('Consolidado_Tipo_Vivienda.pdf','I');


exit;
?>