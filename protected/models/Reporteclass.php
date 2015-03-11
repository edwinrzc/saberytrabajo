<?php
class Reporteclass
{

	public $camposSelect = '*';

	public $camposTh = '';

	public $arregloEtiquetas;

	public $vista;

	public $arregloCampos;


	public $modelo;





	function __construct()
	{
		$this->modelo = new Reporteencuesta;
		$this->arregloEtiquetas = $this->modelo->attributeLabels();
		$this->vista = $this->modelo->tableName();
	}

	public function verificarCamposArray($array)
	{
		if(count($array) > 0)
		{
			$this->arregloCampos = $array;
			foreach ($this->arregloCampos AS $id=>$valor)
			{
				$this->armarCamposSelect($valor);
			}
		}


		//die($this->camposTh);
	}


	public function armarCamposSelect($valor)
	{
		if(!empty($valor))
		{
			$this->armarTh($valor);
			if($this->camposSelect == '*')
			{
				$this->camposSelect = $valor;
			}
			else
			{
				$this->camposSelect .= ','.$valor;
			}
		}
	}



	public function armarTh($atributo)
	{
		$this->camposTh .= '<th>'.$this->arregloEtiquetas[$atributo].'</th>';
	}


	public function construyeLinea($arreglo)
	{
		$td = '<tr>';
		if(count($arreglo) > 0)
		{
			foreach ($this->arregloCampos AS $id=>$valor)
			{
				if(!empty($arreglo[$valor]))
				{
					$td .= '<td align="left">'.$arreglo[$valor].'</td>';
				}
				else
				{
					$td .= '<td align="left">S/D</td>';
				}

			}
		}

		return $td .= '</tr>';

	}


	public function getData()
	{
		$sql = 'Select '.$this->camposSelect.' FROM '.$this->vista;
		return Operaciones::listarSQL($sql);

	}

}