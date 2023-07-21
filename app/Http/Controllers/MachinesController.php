<?php

namespace App\Http\Controllers;


use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MachinesController
{
    public function index()
    {
        //echo "<h1> teste </h1>";
        $machines = Machine::all();
        return view('machines.index')->with('machines', $machines);
    }

    //chama com uma requisição do banco de dados la da model
    public function show(Machine $machine)
    {
        return view('machines.show')->with('machine',$machine);
    }

    //carregar a pagina 
    public function create()
    {
        //machines é o nome da pasta dentro da pasta views . nome do arquivo
        return view('machines.create');
    }

    public function store(Request $request)
    {
        //exemplo mais trabalhoso
        //$machines = new Machine();
        //$machines->name = $request->name;
        //$machines->save();

        //exemplo bom
        //Machine::create($request->all());


        //Somente o campo nome
        Machine::create($request->only('name'));

        //com uma view dentro da outra, usamos aquele x-layout la
        return redirect('machines')->with('success','Máquina cadastrada com sucesso!');
    }
}
