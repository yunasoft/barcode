<?php

namespace Yuna\Barcode\Writer\Raster;

use Yuna\Barcode\Writer\RasterWriter;

class Png extends RasterWriter
{
    final public function render($image, $fileName = null): bool
    {
        if (null === $fileName) {
            $this->withHeader('Content-Type', 'image/png');
        }

        return imagepng($image, $fileName);
    }
}