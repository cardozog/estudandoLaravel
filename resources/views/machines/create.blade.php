<x-layout title="listar">
    <!--NA ROTA É O NOME DA CONTROLLER E O MÉTODO-->
    <a href="{{route('machines.index')}}">Listar</a>

    <h1>Tela de Cadastro</h1>

    <form action="{{route('machines.store')}}" method="POST">
        @csrf
        <label>Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome da machine " /><br><br>
        <button type="submit">Cadastrar</button>
    </form>

</x-layout>