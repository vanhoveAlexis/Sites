<?php

namespace VIDEAL\IncendieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VIDEALIncendie/Default/index.html.twig');
    }
}
