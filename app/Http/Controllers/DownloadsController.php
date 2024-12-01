<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function download($file_name) {
      
        $file_path = public_path('attachments/pdf/'.$file_name);
        return response()->download($file_path);
      }
      public function downloadvid($file_name) {
      
        $file_path = public_path('attachments/lecture/'.$file_name);
        return response()->download($file_path);
      }
}
