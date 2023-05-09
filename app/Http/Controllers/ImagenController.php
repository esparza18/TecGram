<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    //
    public function store(Request $request)
    {
        $imagen = $request ->file('file');

        $nombreImagen = Str::uuid().".".$imagen->extension();

        $imagenservidor = Image::make($imagen);
        $imagenservidor->fit(500,500);

        $imagenRuta = public_path('uploads').'/'.$nombreImagen;

        $imagenservidor ->save($imagenRuta);

        return response ()->json(['imagen'=>$nombreImagen]);
    }
}

