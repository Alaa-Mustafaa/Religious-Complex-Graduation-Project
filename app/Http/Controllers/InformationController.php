<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string',
            'desc1' => 'string',
            'desc2' => 'string',
            'desc3' => 'string',
            'desc4' => 'string',
            'desc5' => 'string',
            'desc6' => 'string',
            'desc7' => 'string',
            'desc8' => 'string',
            'desc9' => 'string',
            'desc10' => 'string',
            'calledreason' => 'string',
            'image' => 'image',
            'imagee' => 'image',
            'imageee' => 'image',
        ]);

        $information = new Information();
        $information->fill($validatedData);

        // Handle image upload
        $information->image = $request->file('image')->store('images');
        $information->imagee = $request->file('imagee')->store('images');
        $information->imageee = $request->file('imageee')->store('images');

        $information->save();

        return redirect()->route('informations.index')->with('success', 'Information stored successfully.');
    }

    public function index()
    {
        // Retrieve 1 row per page
        $informations = Information::paginate(1);
        return view('information_index', compact('informations'));
    }
}

