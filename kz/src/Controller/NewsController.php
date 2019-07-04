<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class NewsController extends AppController
    {
    	public function index() {
    		$this->viewBuilder()->setLayout('hosp');
    	}
    
    	public function page() {
    		$this->viewBuilder()->setLayout('hosp');
    	}

    }


    ?>