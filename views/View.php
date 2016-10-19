<?php

require('libs/Smarty.class.php');

class View{
	
	protected $smarty;
	
	public function __construct(){
		$this->smarty = new Smarty();
	}
	
}


?>