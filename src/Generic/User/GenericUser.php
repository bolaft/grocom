<?php

namespace Generic\User;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bundle de gestion des utilisateurs
 * 
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 */
class GenericUser extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}