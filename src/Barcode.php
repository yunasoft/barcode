<?php

namespace Yuna\Barcode;

use Yuna\Barcode\Interfaces\BarcodeInterface;

abstract class Barcode extends BaseObject implements BarcodeInterface
{
    public int $width;
    public int $height;
    public string $bgColor = '';
    public string $data;
}