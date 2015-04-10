<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyCountryController extends Controller
{

    /**
     * @Route("/country.html", name="counters")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Country')->findAll();

        return $this->render(
            'default/counter.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}