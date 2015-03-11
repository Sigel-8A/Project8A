<?php

class Autor extends AppModel {
    var $name = 'Autor';
    var $useTable = 'autores';

    public $hasMany = array(
    	'Publicacion' => array(
    		'className' => 'Publicacion',
    		'foreignKey' => 'autor_id'
    		)
    	);
}

?>