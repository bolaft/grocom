<?php

namespace Grocom\BackOffice\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Gère les pages du back office
 *
 * @author Soufian Salim <soufi@nsal.im>
 */
class PageController extends Controller
{
	/**
	 * Affiche l'index de l'administration
	 * 
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function indexAction()
    {
        return $this->render('GrocomBackOffice::index.html.twig');
    }
}