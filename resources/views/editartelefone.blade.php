<!DOCTYPE html>
<html>
    <head>
        <title>Editar Telefone</title>
    </head>
    <body>
        <table id="listaTelefone">
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Telefone (se existir)</th>
                <th>Telefone Jurídica (se existir)</th>
                <th>Data de cadastro</th>
                <th>Última atualização</th>
            </tr>
            <tr>
                <form method="POST" action="/api/telefone/{{$telefone->id}}">
                    @method('PUT')
                    <th>{{ $telefone->id }}</th>
                    <th><input type="text" name="numero_telefone" value="{{ $telefone->numero_telefone }}"></input></th>
                    <th>
                        <select name="id_pessoa">
                            @foreach($pessoas as $pessoa)
                                <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <select name="id_pessoa_juridica">
                            @foreach($pessoasjuridicas as $pessoajuridica)
                                <option value="{{ $pessoajuridica->id }}">{{ $pessoajuridica->nome_fantasia }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>{{ date('d-m-Y', strtotime($telefone->created_at)) }}</th>
                    <th>{{ date('d-m-Y', strtotime($telefone->updated_at)) }}</th>
                    <input type="submit" value="Salvar">
                </form>
            </tr>
        </table>
            <a href="/telefones">Cancelar</a>
    </body>
</html>
