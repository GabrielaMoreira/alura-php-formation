@extends('layout')

@section('cabecalho')
    Séries Bacanas
@endsection

@section('conteudo')

    @if(!empty($mensagem))
    <div class="alety alert-success">
        {{ $mensagem }}
    </div>
    @endif

    <a href="{{ route('adicionar_serie') }}" class="btn btn-dark mb-2 mt-2">Adicionar</a>

    <ul class="list-group">
       @foreach($series as $serie)
           <li class="list-group-item d-flex justify-content-between align-items-center">
               {{ $serie->nome }}
               <form method="post" action="/series/{{ $serie->id }}"
                    onsubmit="return confirm('Tem certeza que deseja excluir {{ addslashes($serie->nome)  }} ?')">
                   @csrf
                   @method('DELETE')
                   <button class="btn btn-outline-danger btn-sm">
                       <i class="fas fa-trash-alt"></i>
                   </button>
               </form>
           </li>
       @endforeach
    </ul>
@endsection
