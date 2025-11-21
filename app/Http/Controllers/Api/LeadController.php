<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // recebe os dados do formulario
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:30',
            'email' => 'required|email',
            'text_field' => 'required|string'
        ]);

        // cria uma instancia pra cada cliente e armazena os valores dos dados
        $lead = Lead::create($data);

        // retorna json com sucesso
        return response()->json([
            'message' => 'Lead salvo com sucesso!',
            'data' => $lead
        ], 201);
    }
}
