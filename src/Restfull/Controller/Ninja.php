<?php

namespace Restfull\Controller;

use Symfony\Component\HttpFoundation\Response;

class Ninja extends AbstractController
{
    public function get()
    {
        $response = new Response();
        $response->setContent("ninja");

        $response->send();
    }

    public function head()
    {

    }

    public function options()
    {
        
    }

    public function post()
    {
        
    }

    public function put()
    {
        
    }

    public function delete()
    {
        
    }

    public function patch()
    {
        
    }


}
