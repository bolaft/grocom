<?php

namespace Generic\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GenericUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}