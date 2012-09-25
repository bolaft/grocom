<?php

namespace Generic\Site\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('GenericSite::index.html.twig');
    }
}