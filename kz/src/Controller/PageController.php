<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class PageController extends AppController
    {
    	    public function index()
		    {
		    	$this->viewBuilder()->setLayout('hosp');
		    }
    }