<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class MailController extends AppController
    {
    	public function index(){
    		$this->viewBuilder()->setLayout('hosp');
    	}
    	public function question(){
    		$this->viewBuilder()->setLayout('hosp');
    	}	
    }