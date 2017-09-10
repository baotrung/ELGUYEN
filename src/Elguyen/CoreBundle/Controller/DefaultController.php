<?php

namespace Elguyen\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ElguyenCoreBundle:Default:index.html.twig');
    }
}
