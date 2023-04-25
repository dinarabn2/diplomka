<?php

namespace App\Actions;

use Intervention\Image\Facades\Image;

class UploadImageAction
{

//    public function handle($request, $destinationPath, $obj)
//    {
//        $input = null;
//        if ($request->hasFile('image')) {
//            $file = $request->file('image');
//            $originalName = $file->getClientOriginalName();
//            $name = time().'_'.$originalName;
//            $img = Image::make($file);
//            $file->move($destinationPath, $name);
//            $img->save(public_path($name));
//
//            $input = $request->all();
//            $input['image'] = $name;


//
//            return $obj->create($input);
//        }
//
//        return false;
//    }

    public function handle($request, $destinationPath)
    {
        $input = $request->all();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $originalName = $file->getClientOriginalName();
            $name = time().'_'.$originalName;
            $img = Image::make($file);
            $file->move($destinationPath, $name);
            $img->save(public_path($name));
            $input['img'] = $name;
        }

        return $input;
    }

}