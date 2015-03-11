<?php 

class Receta extends AppModel {
	var $name = 'Receta';
	var $useTable = 'recetas';

	public $hasAndBelongsToMany = array (
		'ingrediente' =>
			array(
				'className' => 'Ingrediente',
				'joinTable' => 'receta_ingredientes',
				'foreignKey' => 'receta_id',
				'associationForeignKey' => 'ingrediente_id',
				)
		);
}

 ?>