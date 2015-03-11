<?php 
class MiPaginaController extends AppController {
	var $uses = array('Publicacion');
	var $name = 'MiPagina';
	public function index(){
		$arrPublicaciones = $this->Publicacion->find('all');
		/*pr($arrPublicaciones);*/

		$this->set('publicaciones', $arrPublicaciones);
	}
}
 ?>
