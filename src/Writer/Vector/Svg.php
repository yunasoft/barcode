<?php

namespace Yuna\Barcode\Writer\Vector;

use Yuna\Barcode\Interfaces\BarcodeInterface;
use Yuna\Barcode\writer\VectorWriter;

class Svg extends VectorWriter
{
    final public function render(BarcodeInterface $barcode, $fileName = null): bool
    {
        if (null === $fileName) {
            $this->withHeader('Content-Type', 'image/svg+xml');
        }
    }
}