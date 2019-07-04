<?php
namespace App\Controller;

use App\Controller\AppController;

class GovproController extends AppController
{
  public function declaration()
    {
        $this->viewBuilder()->setLayout('hosp');
    }
  public function protocols()
    {
        $this->viewBuilder()->setLayout('hosp');
    }
}
