<!DOCTYPE html>
<html>
    <head>
        <title>Pessoas</title>
        <link href="{{ URL::asset('css/users.css') }}" rel="stylesheet" >
    </head>
    <body>
        <h2>Lista de Usuários</h2>
        <table id="listaUsuarios">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Gênero</th>
                <th>Data de Nascimento</th>
                <th>Data de cadastro</th>
                <th>Última atualização</th>
            </tr>
            @foreach($pessoas as $pessoa)
            <tr>
                <th>{{ $pessoa->id }}</th>
                <th>{{ $pessoa->nome }}</th>
                <th>{{ $pessoa->cpf }}</th>
                <th>{{ $pessoa->rg }}</th>
                <th><?php if($pessoa->genero == 0) echo "Masculino"; elseif($pessoa->genero == 1) echo "Feminino"; else echo "Não definido"; ?></th>
                <th>{{ $pessoa->data_nascimento }}</th>
                <th>{{ date('d-m-Y', strtotime($pessoa->created_at)) }}</th>
                <th>{{ date('d-m-Y', strtotime($pessoa->updated_at)) }}</th>
                <th><a href="/editarpessoa/{{$pessoa->id}}">Editar</a></th>
            </tr>
            @endforeach
        </table>
    </body>
</html>
