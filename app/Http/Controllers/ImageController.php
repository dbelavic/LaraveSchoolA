<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function showImage()
    {
        $imageUrl = asset('storage/images/image_02.png'); // ili url('storage/images/image.png') asset('storage/images/image_01.png')

        // Proslijedite $imageUrl u view
        return view('imageView', compact('imageUrl'));
    }
}
