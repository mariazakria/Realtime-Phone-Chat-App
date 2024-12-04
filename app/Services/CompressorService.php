<?php

namespace App\Services;

use Image;

class CompressorService
{

    public function compress($image)
    {
        return Image::make($image)->encode('data-url', 15);
    }
}
