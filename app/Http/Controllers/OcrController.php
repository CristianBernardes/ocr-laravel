<?php

namespace App\Http\Controllers;

use thiagoalessio\TesseractOCR\TesseractOCR;
use thiagoalessio\TesseractOCR\TesseractOcrException;

/**
 *
 */
class OcrController extends Controller
{
    /**
     * @return void
     * @throws TesseractOcrException
     */
    public function tesseractOcr()
    {
        $ocr = new TesseractOCR();
        $ocr->image('imagem.png');
        echo $ocr->run();
    }
}
