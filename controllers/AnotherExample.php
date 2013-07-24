<?php



class AnotherExample
{
    function __construct()
    {

    }

    function test()
    {

        $view = new View(VIEWS_DIR . 'default.php');
        $view->set('content', 'Hello AnotherExample test!');
        print $view;
    }

    function index()
    {


        $view = new View(VIEWS_DIR . 'default.php');
        $view->set('content', 'Hello AnotherExample index!');
        print $view;


    }


}