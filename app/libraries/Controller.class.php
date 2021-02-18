<?php
/*
* Base controller
* Loads models and views.
*/
class Controller {
	public function model($model){
		require_once '../app/models/'.$model.'.class.php';
		return new $model();
	}

	// Loads view
	public function view($view, $data = []){
		// Check for view file
		if (file_exists('../app/views/'.$view.'.php')){
			require_once '../app/views/'.$view.'.php';
		}
		else {
			die('View does not exist.');
		}
	}
}