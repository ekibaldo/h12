<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class DepController extends AppController
    {

    	public function index() {
    		$this->viewBuilder()->setLayout('hosp');
    	}

    
    	public function administ(){
    		$this->viewBuilder()->setLayout('hosp');
    	}

    }

