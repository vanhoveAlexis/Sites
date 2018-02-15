<?php

namespace VIDEAL\InterphonieEtCABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VIDEALInterphonieEtCA/Default/index.html.twig');
    }
}
