<?php

namespace Generic\User;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GenericUser extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}