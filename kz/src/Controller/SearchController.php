<?php
namespace App\Controller;

use App\Controller\AppController;

class SearchController extends AppController
{
  public function states()
    {
    	$this->viewBuilder()->setLayout('hosp');
    }
  public function doctors()
    {
    	$this->viewBuilder()->setLayout('hosp');
    }
  public function services()
    {
    	$this->viewBuilder()->setLayout('hosp');
    }
  public function news()
    {
    	$this->viewBuilder()->setLayout('hosp');
    }	
}