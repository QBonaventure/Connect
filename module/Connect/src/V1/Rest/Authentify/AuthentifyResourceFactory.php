<?php
namespace Connect\V1\Rest\Authentify;

class AuthentifyResourceFactory
{
    public function __invoke($services)
    {
        return new AuthentifyResource();
    }
}
