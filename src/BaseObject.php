<?php

namespace Yuna\Barcode;

use Psr\Container\ContainerInterface;

abstract class BaseObject
{
    private $_container;

    public function __construct(ContainerInterface $container)
    {
        $this->_container = $container;
    }

    public function getContainer(): ContainerInterface
    {
        return $this->_container;
    }
}