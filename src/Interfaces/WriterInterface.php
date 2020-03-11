<?php

namespace Yuna\Barcode\Interfaces;

interface WriterInterface
{
    public function write(BarcodeInterface $barcode, $fileName = null): bool;
}