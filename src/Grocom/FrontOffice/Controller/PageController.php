<?php

namespace Grocom\FrontOffice\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Gère les pages du front office
 * 
 * @author Soufian Salim <soufi@nsal.im>
 */
class PageController extends Controller
{
	/**
	 * Affiche la page d'accueil du site
     * 
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function indexAction()
    {
        return $this->render('GrocomFrontOffice::index.html.twig');
    }
}