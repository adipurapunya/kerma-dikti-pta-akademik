<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universitas;

class UniversitasController extends Controller
{
    public function index(){

        $universitas = Universitas::paginate(15);
       
        return view('universitas.index', ['universitas' => $universitas, 'lastPagination' => 15]);
    }

    public function showPaginationAjax($id){

        $universitas = Universitas::paginate($id);
        
        return view('universitas.index', ['universitas' => $universitas, 'lastPagination' => $id]);
    }
}
