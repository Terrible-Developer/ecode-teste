<!DOCTYPE html>
<html>
    <head>
        <title>Editar Pessoa Jurídica</title>
    </head>
    <body>
        <table id="listaEmpresa">
            <tr>
                <th>ID</th>
                <th>Razão Social</th>
                <th>Nome Fantasia</th>
                <th>CNPJ</th>
                <th>Inscrição Estadual</th>
                <th>Data de fundação</th>
                <th>Data de cadastro</th>
                <th>Última atualização</th>
            </tr>
            <tr>
                <form method="POST" action="/api/pessoajuridicas/{{$empresa->id}}">
                    @method('PUT')
                    <th>{{ $empresa->id }}</th>
                    <th><input type="text" name="razao_social" value="{{ $empresa->razao_social }}"></input></th>
                    <th><input type="text" name="nome_fantasia" value="{{ $empresa->nome_fantasia }}"></input></th>
                    <th><input type="text" name="cnpj" value="{{ $empresa->cnpj }}"></input></th>
                    <th><input type="text" name="inscricao_estadual" value="{{ $empresa->inscricao_estadual }}"></input></th>
                    <th><input type="date" name="fundada_em" value="{{ $empresa->fundada_em }}"></input></th>
                    <th>{{ date('d-m-Y', strtotime($empresa->created_at)) }}</th>
                    <th>{{ date('d-m-Y', strtotime($empresa->updated_at)) }}</th>
                    <input type="submit" value="Salvar">
                </form>
            </tr>
        </table>
            <a href="/pessoas">Cancelar</a>
    </body>
</html>
