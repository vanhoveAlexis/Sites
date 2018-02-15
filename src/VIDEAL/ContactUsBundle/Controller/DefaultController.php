<?php

namespace VIDEAL\ContactUsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VIDEALContactUs/Default/index.html.twig');
    }
}
