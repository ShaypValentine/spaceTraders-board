<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function handleFormSubmit(Request $request)
    {
        $token = $request->input('token');
        session(['token' => $token]);
        return redirect()->route('posthandleFormSubmit');
    }

    public function dashboard()
    {
        $token = session('token');
        $response = Http::withToken($token)->get(env('API_ST_URL') . '/my/agent');

        if ($response->successful()) {
            return view('dashboard', ['infos' => $response->json()]);
        }
        session(['token' => null]); // reset token
        return view('welcome');
    }
}
