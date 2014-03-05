<?php

namespace Nfq\CarsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NfqCarsBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @param int $a
     * @param int $b
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sumaAction($a, $b)
    {
        return $this->render('NfqCarsBundle:Default:suma.html.twig', array(
                'a' => $a,
                'b' => $b,
                'suma' => $a + $b
            ));
    }
}
