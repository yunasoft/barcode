<?php

namespace Yuna\Barcode\Writer;

use Yuna\Barcode\Interfaces\BarcodeInterface;
use Yuna\Barcode\Writer;

abstract class VectorWriter extends Writer
{
    public function write(BarcodeInterface $barcode, $fileName = null): bool
    {
        return $this->render($barcode, $fileName);
    }
}