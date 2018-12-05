<?php

namespace AppBundle\Controller;

use DateTime;
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
      $events = [
        'Conférence Symfony',
        'Conférence Ruby on rails',
        'Conférence Laravel',
        'Conférence PHP',
        'Conférence Django',
        'Conférence Java'
      ];

      return $this->render('events/index.html.twig', \compact('events'));
    }
}

