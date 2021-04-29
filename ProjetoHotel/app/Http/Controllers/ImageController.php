<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use League\CommonMark\Inline\Element\Image;
use Image;
use PHPUnit\Framework\Constraint\Constraint;

class ImageController extends Controller
{
    public function __construct()
    {
        
    }

    public function store(Request $request){
        //dd($request->image); pra erro, depurar
        
        if ($request->hasFile('image')){

            $filenamewithextension = $request->image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $request->image->storeAs('public/img/', $filenametostore);
            //$smallthumbnail = "_small_".$filename.'_'.time().'.'.$extension;
            //$smallthumbnailpath = public_path('storage/img/'.$smallthumbnail);
            //$this->createThumbnail($smallthumbnailpath,150,93);
            //$request->image->storeAs('storage/img/', $smallthumbnail);

            return response()->json(array('nomeArquivo'=>$filenametostore));

        } else{
            //return response()->json(array('nomeArquivo' => 'arquivo não recebido'));
        } 

    }

    public function createThumbnail($path, $width, $height){
        $img = Image::make($path)->riseze($width, $height, function($constraint){
            $constraint->aspecRatio();
        });
        $img->save($path);

    }

    public function getImages($imagem){
        dd("passando o metodo");
        return Image::make(file_get_contents('file://'.storage_path('/app/public/img/'.$imagem)))->response();
    }

    public function excluir(Request $request){

    }
}
