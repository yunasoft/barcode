<?php

namespace Yuna\Barcode\Writer;

use Yuna\Barcode\Interfaces\BarcodeInterface;
use Yuna\Barcode\Writer;

abstract class RasterWriter extends Writer
{
    /**
     * @param BarcodeInterface $barcode
     * @param null $fileName
     * @return bool
     */
    public function write(BarcodeInterface $barcode, $fileName = null): bool
    {
        $image = $this->createImage($barcode);
        $isSaved = $this->render($image, $fileName);
        imagedestroy($image);
        return $isSaved;
    }

    private function createImage(BarcodeInterface $barcode)
    {
        $image = imagecreatetruecolor($barcode->width, $barcode->height);
        imagesavealpha($image, true);

        imagefill($image, 0, 0, $barcode->bgColor);
        return $image;
    }
}