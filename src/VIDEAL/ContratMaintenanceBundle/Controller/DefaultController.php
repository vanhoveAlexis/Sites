<?php

namespace VIDEAL\ContratMaintenanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@VIDEALContratMaintenance/Default/index.html.twig');
    }
}
