<?php

namespace Acme\DemoBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeworkController extends Controller
{
    public function firstAction()
    {
        return new Response('Hello world!');
    }
    
    public function secondAction()
    {
        return $this->render('AcmeDemoBundle:Homework:simpletemplate.html.twig');
    }
    
     public function thirdAction()
    {
        return $this->render('AcmeDemoBundle:Homework:secondtemplate.html.twig');
    }
        
}
