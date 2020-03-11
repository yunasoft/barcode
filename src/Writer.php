<?php

namespace Yuna\Barcode;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Yuna\Barcode\Interfaces\WriterInterface;

/**
 * @property ContainerInterface $container
 */
abstract class Writer extends BaseObject implements WriterInterface
{
    public function withHeader($name, $value)
    {
        if ($this->container->has(ResponseInterface::class)) {
            /** @var ResponseInterface $response */
            $response = $this->container->get(ResponseInterface::class);
            $response->withHeader($name, $value);
        } else {
            header($name . ': ' . $value);
        }
    }
}