<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EventsController extends Controller
{
    /**
     * @Route("/events")
     */
    public function indexAction()
    {
      return $this->render('events/index.html.twig');
    }
}

