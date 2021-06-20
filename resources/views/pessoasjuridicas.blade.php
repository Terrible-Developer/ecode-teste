<!DOCTYPE html>
<html>
    <head>
        <title>Pessoas Jurídicas</title>
        <link href="{{ URL::asset('css/users.css') }}" rel="stylesheet" >
    </head>
    <body>
        <h2>Lista de Pessoas Jurídicas cadastradas</h2>
        <table id="listaUsuarios">
            <tr>
                <th>ID</th>
                <th>Razão Social</th>
                <th>Nome Fantasia</th>
                <th>CNPJ</th>
                <th>Inscrição Estadual</th>
                <th>Telefones</th>
                <th>Endereço</th>
                <th>Data de fundação</th>
                <th>Data de cadastro</th>
                <th>Última atualização</th>
            </tr>
            @foreach($empresas as $empresa)
            <tr>
                <th>{{ $empresa->id }}</th>
                <th>{{ $empresa->razao_social }}</th>
                <th>{{ $empresa->nome_fantasia }}</th>
                <th>{{ $empresa->cnpj }}</th>
                <th>{{ $empresa->inscricao_estadual }}</th>
                <th>
                    <?php
                    $telefones = getTelefoneEmpresa($empresa->id);
                    for($i = 0; $i < count($telefones); $i++){
                        echo ' | ' . $telefones[$i]->numero_telefone . ' ';
                    } ?>
                </th>
                <th>
                    <?php
                    $enderecos = getEnderecoEmpresa($empresa->id);
                    for($i = 0; $i < count($enderecos); $i++){
                        echo ' | ' . $enderecos[$i]->endereco . ' ';
                    }
                    ?>
                </th>
                <th> {{ $empresa->fundada_em }}</th>
                <th>{{ date('d-m-Y', strtotime($empresa->created_at)) }}</th>
                <th>{{ date('d-m-Y', strtotime($empresa->updated_at)) }}</th>
                <th class="botaoAcao"><a href="/editarempresa/{{$empresa->id}}">Editar</a>
                    <form method="POST" action="/api/pessoajuridicas/{{$empresa->id}}">
                        @method('DELETE')
                        <input type="submit" value="Deletar">
                    </form>
                </th>
            </tr>
            @endforeach
        </table>
        <a href="/">Retornar ao início</a>
    </body>
</html>
