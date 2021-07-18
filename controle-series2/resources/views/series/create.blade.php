@extends('layout')

@section('cabecalho')
    Adicionar Série Bacana
@endsection

@section('conteudo')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="row mt-2">
            <div class="col col-12">
                <label for="nome">Nome da série</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col col-6">
                <label for="qtd_temporadas">Nº de temporadas</label>
                <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
            </div>

            <div class="col col-6">
                <label for="qtd_temporadas">Ep. por temporadas</label>
                <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
            </div>
        </div>
        <button class="btn btn-outline-dark mt-2">Adicionar</button>
    </form>
@endsection
