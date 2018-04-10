<?php

namespace VIDEAL\AboutUsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VIDEALAboutUs/Default/index.html.twig');
    }
}
