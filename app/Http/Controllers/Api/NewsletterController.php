<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email'
        ]);

        $newsletter = Newsletter::create($data);

        return response()->json([
            'message' => 'Email salvo com sucesso!',
            'data' => $newsletter
        ], 201);
    }
}
