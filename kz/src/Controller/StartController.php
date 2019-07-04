<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class StartController extends AppController
    {
    	public function index()
    	{
    		$this->viewBuilder()->setLayout('hosp');
    	}
	

  
    
    }