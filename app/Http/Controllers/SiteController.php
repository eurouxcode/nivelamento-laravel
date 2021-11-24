<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    /**
     * Página Sobre
     *
     * @return void
     */
    public function sobre()
    {
        $empresa = "Treinaweb Cursos";
        return view('sobre')->with('empresa', $empresa);
    }

    /**
     * Página de contato
     *
     * @return void
     */
    public function contato()
    {
        return view('contato');
    }
}
