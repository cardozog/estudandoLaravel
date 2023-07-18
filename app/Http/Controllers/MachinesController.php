<?php

namespace App\Http\Controllers;


use App\Models\Machine;
use Illuminate\Support\Facades\DB;

class MachinesController
{
    public function index()
    {
        //echo "<h1> teste </h1>";
        $machines = Machine::all();
        return view('machines.index')->with('machines', $machines);
   
    }

    public function show($id)
    {
        echo "<h1> Visualizar  $id</h1>";
    }
}
