@extends ('layouts.main')

@section('title', 'Listar OS')
@section('content')

<section class="listar-os">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Defeito</th>
                <th scope="col">Solução</th>
                <th scope="col">Preço</th>
                <th scope="col" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($os as $os)
            <tr>
                <th scope="row">{{$os->id}}</th>
                <td>{{$os->marca}}</td>
                <td>{{$os->modelo}}</td>
                <td>{{$os->defeito}}</td>
                <td>{{$os->solucao}}</td>
                <td>{{$os->preco}}</td>
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
