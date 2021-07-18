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
        <div class="form-group mt-2">
            <label for="nome">Nome da série</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <button class="btn btn-outline-dark mt-2">Adicionar</button>
    </form>
@endsection
