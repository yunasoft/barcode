<?php

namespace Yuna\Barcode;

use Yuna\Barcode\Interfaces\BarcodeInterface;

abstract class Barcode extends BaseObject implements BarcodeInterface
{
    public $width;
    public $height;
    public $bgColor = '#ffffff';
}