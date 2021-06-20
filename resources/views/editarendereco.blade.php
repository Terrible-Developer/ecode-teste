<!DOCTYPE html>
<html>
    <head>
        <title>Editar Endereço</title>
    </head>
    <body>
        <table id="listaEndereco">
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
            <tr>
                <form method="POST" action="/api/endereco/{{$endereco->id}}">
                    @method('PUT')
                    <th>{{ $endereco->id }}</th>
                    <th><input name="endereco" type="text" value="{{ $endereco->endereco }}"></th>
                    <th><input type="text" name="numero" value="{{ $endereco->numero }}"></input></th>
                    <th><input name="cidade" type="text" value="{{ $endereco->cidade }}"></th>
                    <th><input name="estado" type="text" value="{{ $endereco->estado }}"></th>
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
                    <th>{{ date('d-m-Y', strtotime($endereco->created_at)) }}</th>
                    <th>{{ date('d-m-Y', strtotime($endereco->updated_at)) }}</th>
                    <input type="submit" value="Salvar">
                </form>
            </tr>
        </table>
            <a href="/enderecos">Cancelar</a>
    </body>
</html>
