<?php

namespace Generic\Site\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Classe de gestion du front-office
 * 
 * @author Soufian Salim <soufi@nsal.im>
 */
class SiteController extends Controller
{
	/**
	 * Affiche la page d'accueil du site
	 * @return Symfony\Component\HttpFoundation\Response
	 */
    public function indexAction()
    {
        return $this->render('GenericSite::index.html.twig');
    }

    /**
     * Affiche la page "Page non trouvée"
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function pageNotFoundAction()
    {
        return $this->render('::page_not_found.html.twig');
    }
}