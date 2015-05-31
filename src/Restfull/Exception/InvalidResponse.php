<?php

namespace Restfull\Exception;

class InvalidResponse extends Exception
{

    public function __contruct()
    {
        $message = "All Controllers Must Return a Symfony\Component\HttFoundation\Response instance!";
        parent::__construct($message);
    }
}