<?php


    namespace App\Controller;

    use App\Controller\AppController;

    class FaqController extends AppController
    {
    	  public function index()
    		{
    			$this->viewBuilder()->setLayout('hosp');
    		}
    }



?>