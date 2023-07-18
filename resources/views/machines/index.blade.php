<x-layout>
    <h1>teste</h1>

    <!--cada resultado de $machines (query la do banco) sera guardado em $machine, portanto imprima -->
    <table>
        <thead>
            <td><strong>ID</strong></td>
            <td><strong>Nome</strong></td>
        </thead>
        <tbody>
            @foreach ($machines as $machine)
            <tr> 
            <td>{{$machine->id}}</td>
            <td>{{$machine->name}}</td>
            </tr>    
            @endforeach
        </tbody>
    </table>

</x-layout>