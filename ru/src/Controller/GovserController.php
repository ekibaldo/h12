<?php
namespace App\Controller;

use App\Controller\AppController;

class GovserController extends AppController
{
  public function infographics()
    {
        $this->viewBuilder()->setLayout('hosp');
    }
  public function register()
    {
        $this->viewBuilder()->setLayout('hosp');
    }
  public function regulations()
    {
        $this->viewBuilder()->setLayout('hosp');
    }
  public function standards()
    {
        $this->viewBuilder()->setLayout('hosp');
    }
}
