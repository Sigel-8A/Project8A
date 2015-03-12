<?php 

class UsersController extends AppController {	
	var $name = 'Users';
	var $uses = array('User');

	function index() {

	}

    function register(){
    	
    }

	function login(){
		$this->layout = 'admin';

	}

	function logout() {
		$this->Session->delete('Usuario');
		$this->redirect(array('controller' => 'Users', 'action' => 'ingresar'));

	}

	function ingresar(){
		$this->layout = 'admin';
		if ($this->data){
			/*pr($this->data);*/
			$usuario = $this->User->find('first', array('conditions' => array('User.username' => $this->data['user'], 'User.password' => $this->data['password'])));
			/*pr($usuario);*/

			if(!empty($usuario)){
				$this->Session->write('Usuario', $usuario);
			}	
		}
	}
}
?>