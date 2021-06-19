<!DOCTYPE html>
<html>
    <head>
        <title>Editar Pessoa</title>
    </head>
    <body>
        <table id="listaUsuario">
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
            <tr>
                <form method="POST" action="/api/pessoa/{{$pessoa->id}}">
                    @method('PUT')
                    <th>{{ $pessoa->id }}</th>
                    <th><input type="text" name="nome" value="{{ $pessoa->nome }}"></input></th>
                    <th><input type="text" name="cpf" value="{{ $pessoa->cpf }}"></input></th>
                    <th><input type="text" name="rg" value="{{ $pessoa->rg }}"></input></th>
                    <th>
                        <select name="genero">
                            <option value="0" <?php if($pessoa->genero == 0) echo "selected"; ?> >Masculino</option>
                            <option value="1" <?php if($pessoa->genero == 1) echo "selected"; ?> >Feminino</option>
                            <option value="2" <?php if($pessoa->genero == 2) echo "selected"; ?> >Não definido</option>
                        </select>
                    </th>
                    <th><input type="date" name="data_nascimento" value="{{ $pessoa->data_nascimento }}"></input></th>
                    <th>{{ date('d-m-Y', strtotime($pessoa->created_at)) }}</th>
                    <th>{{ date('d-m-Y', strtotime($pessoa->updated_at)) }}</th>
                    <input type="submit" value="Salvar">
                </form>
            </tr>
        </table>
            <a href="/pessoas">Cancelar</a>
    </body>
</html>
