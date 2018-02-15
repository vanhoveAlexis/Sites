<?php

namespace VIDEAL\DepannageVideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VIDEALDepannageVideo/Default/index.html.twig');
    }
}
