<?php
namespace App\Controller;

use App\Controller\AppController;

class MedserController extends AppController
{
  public function price()
    {
        $this->viewBuilder()->setLayout('hosp');
    }		
  public function department()
    {
        $this->viewBuilder()->setLayout('hosp');
    }		
}
