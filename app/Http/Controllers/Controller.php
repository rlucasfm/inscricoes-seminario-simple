<?php

namespace App\Http\Controllers;

use App\Models\Inscricao;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function landingpage() {
        return view('landingpage');
    }

    public function home() {
        return view('home');
    }

    public function inscrever(Request $request) {
        try {
            $requested_data = [
                'name' => $request->input('name'),
                'cpf' => $request->input('cpf', '0'),
                'igreja' => $request->input('igreja'),
                'value' => $request->input('valor'),
            ];

            Inscricao::create($requested_data);
        } catch (\Throwable $th) {
            return view('status')->with('error', $th->getMessage());
        }

        return view('status')->with('success', 'Inscrição feita com sucesso');
    }
}
