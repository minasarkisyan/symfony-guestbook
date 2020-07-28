<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="homepage")
     * @param string $name
     * @return Response
     */
    public function index(string $name = '')
    {
        $great = '';

        if ($name) {
            $great = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        $content = '<html lang="en"><body>'.$great.'<img src="/images/construction.jpg" width="500" alt="img"/></body></html>';
        return new Response($content);
    }
}