<?php

namespace App\Actions;

class UploadFileAction
{
    public function handle($request, $destinationPath)
    {
        $input = $request->except('_token');

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $originalName = $file->getClientOriginalName();
            $name = time().'_'.$originalName;
            $file->move($destinationPath, $name);
            $input['document'] = $name;
        }
       
        return $input;
    }

}