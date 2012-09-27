<?php

namespace Generic\User;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bundle de gestion des utilisateurs
 */
class GenericUser extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}