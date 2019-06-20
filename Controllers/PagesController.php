<?php
declare(strict_types=1);

namespace Legacy\Controllers;

class PagesController {
	
	public function defaultAction(){


		$v = new View("homepage", "back");
		$v->assign("pseudo","prof");
	}
	

}