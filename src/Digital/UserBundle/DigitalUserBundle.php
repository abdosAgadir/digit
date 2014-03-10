<?php

namespace Digital\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DigitalUserBundle extends Bundle
{
    public function getParent() {
       return 'FOSUserBundle';
    }
}
