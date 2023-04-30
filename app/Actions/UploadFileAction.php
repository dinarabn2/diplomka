<?php

namespace App\Actions;

class UploadFileAction
{
    public function handle($request, $destinationPath)
    {
        $input = $request->except('_token');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $name = time().'_'.$originalName;
            $file->move($destinationPath, $name);
            $input['file'] = $name;
        }
       
        return $input;
    }

}