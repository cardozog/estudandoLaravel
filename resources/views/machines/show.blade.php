<x-layout title="Visualizar Máquina">
    <!--NA ROTA É O NOME DA CONTROLLER E O MÉTODO-->
    <a href="{{route('machines.index')}}">Listar</a>

    <h1>Máquina</h1>

    ID: {{$machine->id}}<BR>
    NOME: {{$machine->name}}<br>
</x-layout>