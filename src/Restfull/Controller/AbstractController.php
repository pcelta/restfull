<?php

namespace Restfull\Controller;

use Symfony\Component\HttpFoundation\Request;
use Respect\Rest\Routable;

abstract class AbstractController implements Routable
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @return Request
     */
    protected function getRequest()
    {
        if (!$this->request instanceof Request) {
            $this->request = Request::createFromGlobals();
        }

        return $this->request;
    }

    abstract public function options();
    abstract public function head();
    abstract public function get();
    abstract public function post();
    abstract public function patch();
    abstract public function put();
    abstract public function delete();
}
