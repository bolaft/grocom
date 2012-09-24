<?php

namespace Generic\Admin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('GenericAdmin::admin.html.twig');
    }
}