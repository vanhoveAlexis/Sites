<?php

namespace VIDEAL\DepannageAlarmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VIDEALDepannageAlarme/Default/index.html.twig');
    }
}
