<?php

declare(strict_types=1);

namespace MauticPlugin\FranBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;

class DefaultController extends CommonController
{
    public function index()
    {
        return 'Hello World';
    }
}