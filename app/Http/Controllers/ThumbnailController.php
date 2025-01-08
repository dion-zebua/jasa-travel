<?php

namespace App\Http\Controllers;

use claviska\SimpleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ThumbnailController extends Controller
{
    public function generateThumbnail($text)
    {
        $image = new SimpleImage('img/bg-thumbnail.jpg');
        $image->resize(1600, 900);
        $wrappedText = wordwrap($text, 25, "\n");
        $lines = explode("\n", $wrappedText);

        foreach ($lines as $key => $item) {
            $yOffset = -300 + ($key * 130);
            $image->text($item, [
                'color' => 'white',
                'size' => 100,
                'yOffset' => $yOffset,
                'fontFile' => public_path('font/Poppins-Regular.ttf'),
            ]);
        }
        $imageData = $image->toDataUri();

        return response()->make(file_get_contents($imageData), 200, [
            'Content-Type' => 'image/jpeg',
        ]);
    }
}
