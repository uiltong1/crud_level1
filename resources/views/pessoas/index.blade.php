@extends('layouts.layout')
@section('content')
<h3>Listagem de Pessoas</h3>
<br><br>
<div class="float-md-right">
    <a class="btn btn-dark" href="{{route('pessoas_create')}}">Novo</a>
</div>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Documento</th>
            <th>Email</th>
            <th colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody>
            @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->id }}
                    <td>{{ $pessoa->name }}</td>
                    <td>{{ $pessoa->document_number }}</td>
                    <td>{{ $pessoa->email }}</td>
                    <td><a class="btn btn-success" href="{{route('pessoas_edit', $pessoa->id)}}">Editar</a></td>
                    <td>
                        <form method="post" action="{{route('pessoas_delete', $pessoa->id)}}">
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>
@endsection
