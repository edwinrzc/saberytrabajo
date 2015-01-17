<?php
class Operaciones
{
	
	public static function ejecutarSQL($sql)
	{
		$connection= Yii::app()->db;
		$command= $connection->createCommand($sql);
		return $command->execute();
	}
	
	public static function consultarSQL($sql)
	{
		$connection= Yii::app()->db;
		$command=$connection->createCommand($sql);
		return $command->queryRow();
	}
	


	public static function listarSQL($sql)
	{
		$connection= Yii::app()->db;
		$command=$connection->createCommand($sql);
		return $command->queryAll();
	}
	
	
}