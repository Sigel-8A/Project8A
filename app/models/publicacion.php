<?php

class Publicacion extends AppModel {
    var $name = 'Publicacion';
    var $useTable = 'publicaciones';
    
    public $belongsTo = 'Autor';
}

?>