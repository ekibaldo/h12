<?php
namespace App\Controller;

use App\Controller\AppController;

class ReviewsController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('hosp');
    }

}
