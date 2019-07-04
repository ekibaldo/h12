<?php
namespace App\Controller;

use App\Controller\AppController;

class ContactsController extends AppController
{
  public function index()
    {
    	$this->viewBuilder()->setLayout('hosp');
    }
}