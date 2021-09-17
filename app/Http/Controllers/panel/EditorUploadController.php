<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditoUploadController extends Controller
{

    public function upload(Request $request)
    {
        $file = $request->file('upload');

        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); 
        $ext = $file->getClientOriginalExtension();

        $file_name = $base_name . '_' . time() . '.' . $ext;
        $file->storeAs('images/posts', $file_name, 'public_files');

        $function = $request->CKEditorFuncNum;
        $url = asset('images/posts/'.$file_name);

        return response("<script>window.parent.CKEDITOR.tools.callFunction({$function}, '{$url}', 'فایل به درستی اپلود شد')</script>");
    }
}
