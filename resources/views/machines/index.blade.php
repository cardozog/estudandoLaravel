<x-layout title="listar">


    <a href="{{route('machines.create')}}">Cadastrar </a>
    <h1>teste</h1>
    @include('components/flash-message')

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
                <td style="display:flex;">
                    <button>
                        <a href="{{route('machines.show',$machine->id)}}">Visualizar</a>
                    </button>&nbsp;
                    <button>
                        <a href="{{route('machines.edit',$machine->id)}}">Editar</a>
                    </button>&nbsp;
                    <form action="{{route('machines.destroy',$machine->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Apagar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>