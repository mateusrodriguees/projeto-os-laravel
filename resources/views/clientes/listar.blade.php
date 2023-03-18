@extends ('layouts.main')

@section('title', 'Listar Clientes')
@section('content')

<section class="listar-clientes">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">CPF</th>
                <th scope="col">Email</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <th scope="row">{{$cliente->id}}</th>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->cpf}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->datanasc}}</td>
                <td>
                    <a href="#" role="button" class="btn btn-success btn-sm">Atualizar</a>
                </td>
                <td>
                    <a href="#" role="button" class="btn btn-danger btn-sm">Deletar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection
