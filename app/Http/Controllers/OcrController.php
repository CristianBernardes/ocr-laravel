<?php

namespace App\Http\Controllers;

use thiagoalessio\TesseractOCR\TesseractOCR;

class OcrController extends Controller
{
    public function tesseractOcr()
    {
        $ocr = new TesseractOCR();
        $ocr->image('imagem.png');
        echo $ocr->run();
    }
}
