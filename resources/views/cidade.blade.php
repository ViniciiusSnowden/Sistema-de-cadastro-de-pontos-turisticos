@extends('layout.principal')
@section('conteudo')
<html>
    <body>
        </br>
        <h2>Listagem de cidades <a href="{{route('cidade.formulario')}}"><i class="bi bi-plus-circle-fill"></i></a> </h2>
        </br>
        <table class="table">
            <thead class="thead-dark">
             <tr>
                <th scope="col">Nome</th>
                <th scope="col">Editar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cidade as $c)
                <tr>
                    <td>{{$c->name}}</td>
                    <td><a href="{{route('cidade.formulario.edit',['id'=>$c->id])}}"><i class="bi bi-pencil-square"></i></a></td>
                </tr>    
            @endforeach
            </tbody>
            </table>
    </body>
</html>
@endsection