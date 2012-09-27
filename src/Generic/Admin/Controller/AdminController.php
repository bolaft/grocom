<?php

namespace Generic\Admin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Classe de gestion du back-office
 */
class AdminController extends Controller
{
	/**
	 * Affiche l'index de l'administration
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function indexAction()
    {
        return $this->render('GenericAdmin::index.html.twig');
    }
}