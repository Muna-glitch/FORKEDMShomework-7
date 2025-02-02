<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{

    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }

    
    public function notFound() 
    {
        $template = $this->twig->load('error/error.twig');
        http_response_code(404);
        echo $template->render(); 
    } 

}
