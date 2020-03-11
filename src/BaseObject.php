<?php

namespace Yuna\Barcode;

use Psr\Container\ContainerInterface;

/**
 * Class BaseObject
 * @package Yuna\Barcode
 *
 * @property ContainerInterface $container
 */
abstract class BaseObject
{
    private $_container;

    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
    }

    public function setContainer(ContainerInterface $container)
    {
        $this->_container = $container;
    }

    public function getContainer(): ContainerInterface
    {
        return $this->_container;
    }

    public function __get($name)
    {
        return $this->{'get'.ucfirst($name)}();
    }
}