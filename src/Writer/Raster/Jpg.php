<?php

namespace Yuna\Barcode\Writer\Raster;

use Yuna\Barcode\Writer\RasterWriter;

class Jpg extends RasterWriter
{
    final public function render($image, $fileName = null): bool
    {
        if (null === $fileName) {
            $this->withHeader('Content-Type', 'image/jpeg');
        }

        return imagejpeg($image, $fileName);
    }
}