<?php

namespace Ihadis\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IhadisCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}