<?php

namespace Yuna\Barcode\Writer\Raster;

use Yuna\Barcode\Writer\RasterWriter;

class Gif extends RasterWriter
{
    final public function render($image, $fileName = null): bool
    {
        if (null === $fileName) {
            $this->withHeader('Content-Type', 'image/gif');
        }

        return imagegif($image, $fileName);
    }
}