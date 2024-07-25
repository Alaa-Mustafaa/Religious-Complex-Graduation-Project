<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trip;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\DemoMail;

use function Laravel\Prompts\alert;

class TriipController extends Controller
{
    public function create()
    {
        return view('triips.create');
    }

    public function store(Request $request)
    {
        $data =   $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'phone' => 'required|string|max:20',
            'number_of_adults' => 'required|integer|min:0',
            'number_of_kids' => 'required|integer|min:0',
            'program' => 'required|string|in:first program,second program',

        ]);

        trip::create($data);
        session()->flash("success", "Your trip has been booked successfully");

        // send email to welcome new users 
        $data = [
            "title" => "Religious Complex",
            "body" => "Your trip has been booked successfully"
        ];

        Mail::to($request->email)->send(new DemoMail($data));

        return view('triips.create');
    }
}
