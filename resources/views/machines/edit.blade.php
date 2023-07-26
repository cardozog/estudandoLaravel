<x-layout title="listar">
    <!--NA ROTA É O NOME DA CONTROLLER E O MÉTODO-->
    <a href="{{route('machines.index')}}">Editar</a>

    <h1>Editar Máquina</h1>

    <form action="{{route('machines.update',$machine ->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome da machine " value="{{$machine->name}}"/><br><br>
        <button type="submit">Editar</button>
    </form>

</x-layout>