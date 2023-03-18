@extends('layouts.main')
@section('title','Cadastrar OS')
@section('content')
<main class="cadastro-os">
<section classs="cadastrar-os">
    <h1>Cadastrar OS</h1>
    <form class="row g-3" action="/os" method="post">
        @csrf
        <div class="col-md-6">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" required>
        </div>
        <div class="col-md-6">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" required>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Problema" id="defeito" style="height: 100px" name="defeito" required></textarea>
                <label for="defeito">Defeito</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Solução" id="solucao" style="height: 100px" name="solucao" required></textarea>
                <label for="solucao">Solução</label>
            </div>
        </div>
        <div class="col-md-2">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" required>
        </div>
        <div class="col-12 cad-os">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>
</main>

@endsection
