<!DOCTYPE html>
<html>
    <head>
        <title>Telefones</title>
        <link rel="stylesheet" href="{{ asset('css/telefones.css') }}">
    </head>
    <body>
        <h2>Lista de telefones cadastrados</h2>
        <table id="listaTelefones">
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Pessoa (se existir)</th>
                <th>Pessoa Jurídica (se existir)</th>
                <th>Data de cadastro</th>
                <th>Última atualização</th>
            </tr>
            @foreach($telefones as $telefone)
            <tr>
                <th>{{ $telefone->id }}</th>
                <th>{{ $telefone->numero_telefone }}</th>
                <th>{{ getPessoa($telefone->id_pessoa)->nome ?? "Não possui" }}</th>
                <th>{{ getEmpresa($telefone->id_pessoa_juridica)->nome_fantasia ?? "Não possui" }}</th>
                <th>{{ date('d-m-Y', strtotime($telefone->created_at)) }}</th>
                <th>{{ date('d-m-Y', strtotime($telefone->updated_at)) }}</th>
                <th class="botaoAcao"><a href="/editartelefone/{{$telefone->id}}">Editar</a>
                    <form method="POST" action="/api/telefone/{{$telefone->id}}">
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
