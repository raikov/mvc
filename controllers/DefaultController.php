<?php



class DefaultController  
{
    function __construct()
    {

    }

    function test()
    {

         $view = new View(VIEWS_DIR.'default.php');
         $view->set('content',  'Hello from test!');
         
         print $view;
    }

    function index()
    {


        $view = new View(VIEWS_DIR.'default.php');
        $view->set('content',  'Hello from The Example Controller!');
         
         print $view;

    }


}