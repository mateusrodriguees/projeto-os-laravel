@extends ('layouts.main')

@section('title', 'Cadastrar Cliente')
@section('content')
<main class="cadastro-clientes">
<section class="cadastrar-clientes">
    <h1>Cadastrar Cliente</h1>
    <form class="row g-3" action="/cliente" method="post">
        @csrf
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Asa Sul - Edifício XYZ, Apto 3201" name="endereco" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="col-md-4">
            <label for="datanasc" class="form-label">Data de Nacimento</label>
            <input type="date" class="form-control" id="datanasc" name="datanasc" required>
        </div>
        <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" required>
        </div>
        <div class="col-12 cad-cliente">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>
</main>
@endsection
