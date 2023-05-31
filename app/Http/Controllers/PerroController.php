<?php

namespace App\Http\Controllers;

use App\Repositories\PerroRepository;
use Illuminate\Http\Request;


class PerroController extends Controller
{
    protected PerroRepository $perroRepo;

    public function __construct()
    {
        $this->perroRepo = new PerroRepository();
    }

    public function guardarPerro(Request $request)
    {
        return $this->perroRepo->guardarPerro($request);
    }

    public function listarPerro()
    {
        return $this->perroRepo->listarPerro();
    }

}