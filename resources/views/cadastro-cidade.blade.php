@extends('layout.principal')
@section('conteudo')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(empty($cidade))
    <h2>Cadastrar cidade</h2>
    <form action="{{route('cidade.insere')}}" method="POST">
@else
    <h2>Editar nome da cidade</h2>
    <form action="{{route('cidade.edicao',['id'=>$cidade->id])}}" method="POST">    
@endif   
    @csrf
    </br>
    <label class="form-label">Cidade</label>
    <input class="form-control" placeholder="Digite o nome da cidade" type="text" name="nome" maxlength="150" @isset($cidade) value="{{$cidade->name}}" @endisset>
    </br>
    @if(empty($cidade))
        <button type="submit" class="btn btn-primary">Salvar</button>
    @else
    <button type="submit" class="btn btn-primary" >Editar</button>
    @endif
    <a class="btn btn-secondary" href="{{route('cidade.lista')}}">Cancelar</a>
</form>
@if(!empty($cidade))
    <form action="{{route('cidade.exclusao',['id'=>$cidade->id])}}" method="POST">   
    @csrf
        <button class="btn btn-danger" type="submit">Excluir</button>
    </form>
@endif
@endsection