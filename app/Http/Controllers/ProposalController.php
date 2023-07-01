<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proposal;

class ProposalController extends Controller
{
    public function index(){
        //$proposal = Barang::get();
        //return view('proposal.index', ['proposal' => $proposal]);
        return view('proposal.index');
    }

    public function tambah(){

        $proposal = proposal::get();
        //return view('barang.form',['kategori' => $kategori]);
    }

    public function viewbab1(){

        //$proposal = proposal::get();
        return view('proposal.view.viewBab1');
    }

    public function editbab1(){

        //$proposal = proposal::get();
        return view('proposal.edit.bab1');
    }

    public function editbab2(){

        //$proposal = proposal::get();
        return view('proposal.edit.bab2');
    }

    public function editbab3(){

        //$proposal = proposal::get();
        return view('proposal.edit.bab3');
    }

    public function editbab4(){

        //$proposal = proposal::get();
        return view('proposal.edit.bab4');
    }
}
