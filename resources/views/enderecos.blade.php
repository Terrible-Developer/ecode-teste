<!DOCTYPE html>
<html>
    <head>
        <title>Enderecos</title>
        <link rel="stylesheet" href="{{ asset('css/enderecos.css') }}">
    </head>
    <body>
        <h2>Lista de enderecos cadastrados</h2>
        <table id="listaEnderecos">
            <tr>
                <th>ID</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Pessoa (se existir)</th>
                <th>Pessoa Jurídica (se existir)</th>
                <th>Data de cadastro</th>
                <th>Última atualização</th>
            </tr>
            @foreach($enderecos as $endereco)
            <tr>
                <th>{{ $endereco->id }}</th>
                <th>{{ $endereco->endereco }}</th>
                <th>{{ $endereco->numero }}</th>
                <th>{{ $endereco->cidade }}</th>
                <th>{{ $endereco->estado }}</th>
                <th>{{ getPessoa($endereco->id_pessoa)->nome ?? "Não possui" }}</th>
                <th>{{ getEmpresa($endereco->id_pessoa_juridica)->nome_fantasia ?? "Não possui" }}</th>
                <th>{{ date('d-m-Y', strtotime($endereco->created_at)) }}</th>
                <th>{{ date('d-m-Y', strtotime($endereco->updated_at)) }}</th>
                <th class="botaoAcao"><a href="/editarendereco/{{$endereco->id}}">Editar</a>
                    <form method="POST" action="/api/endereco/{{$endereco->id}}">
                        @method('DELETE')
                        <input type="submit" value="Deletar">
                    </form>
                </th>
                <!-- ><a href="/api/pessoa">Deletar</a></th>-->
            </tr>
            @endforeach
        </table>
        <a href="/">Retornar ao início</a>
    </body>
</html>
