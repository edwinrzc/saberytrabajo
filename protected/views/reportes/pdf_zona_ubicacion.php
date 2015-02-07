<?
$pdf = Yii::createComponent('application.extensions.mpdf.mpdf');
$dataProvider = Reportes::consolidado_zona_ubicacion();
$data=$dataProvider->getData();

$contador=count($data);
$total=0;
$total1=0;
$total2=0;


    $html.=' <link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/mpdf.css" />

    <table align="center"><tr>
    <td align="center"><b>CONSOLIDADO POR ZONAS DE UBICACIÓN</b></td>
    </tr></table>

    <br>
        <table  align="center" width="80%" border="1" style="border-collapse: collapse">
            <tr  style="background-color:#F10E1D;">
                <th  width="100px" >&nbsp;ESTADOS</th>
                <th  width="50px" >&nbsp;URBANIZADA</th>
                <th  width="50px" >&nbsp;NO URBANIZADA</th>
                <th  width="50px" >&nbsp;RURAL</th>

            </tr>';
         $i=0;
         $val=count($data);
         
         while($i<$val){
            $total+=$data[$i]["urbanizada"];
            $total1+=$data[$i]["nourbanizada"];
            $total2+=$data[$i]["rural"];
$html.='
            <tr>
                <td>&nbsp;'.$data[$i]["estado"].'</td>
                <td align="center" width="50px" >&nbsp;'.$data[$i]["urbanizada"].'</td>
                <td align="center" width="50px" >&nbsp;'.$data[$i]["nourbanizada"].'</td>
                <td align="center" width="50px" >&nbsp;'.$data[$i]["rural"].'</td>
            ';
            

                      

    $html.='</tr>'; $i++;
                        }
    $html.=' <tr >
                <th align="left" style="background-color:#F10E1D;" width="7%">&nbsp; TOTAL</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total1.'</th>
                <th align="center" style="background-color:#F10E1D;" width="7%">&nbsp;'.$total2.'</th>
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
$mpdf->Output('Consolidado_Zona_ubicacion.pdf','I');


exit;
?>
