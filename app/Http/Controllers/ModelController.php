<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ModelController extends Controller
{
    //

    public function showUploadForm()
    {
        return view('user.models');
    }

    public function handleUpload(Request $request)
    {
        $request->validate([
            'model' => 'required|file', // Max size 10MB
        ]);

        $path = $request->file('model')->store('models');

        return view('models.obj1', ['modelPath' => Storage::url($path)]);
    }
}
