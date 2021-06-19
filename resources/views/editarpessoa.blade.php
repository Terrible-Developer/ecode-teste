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
                <th>{{ $pessoa->id }}</th>
                <th><input type="text" value="{{ $pessoa->nome }}"></input></th>
                <th><input type="text" value="{{ $pessoa->cpf }}"></input></th>
                <th><input type="text" value="{{ $pessoa->rg }}"></input></th>
                <th>
                    <select >
                        <option value="0" <?php if($pessoa->genero == 0) echo "selected"; ?> >Masculino</option>
                        <option value="1" <?php if($pessoa->genero == 1) echo "selected"; ?> >Feminino</option>
                        <option value="2" <?php if($pessoa->genero == 2) echo "selected"; ?> >Não definido</option>
                    </select>
                </th>
                <th><input type="date" value="{{ $pessoa->data_nascimento }}"></input></th>
                <th>{{ date('d-m-Y', strtotime($pessoa->created_at)) }}</th>
                <th>{{ date('d-m-Y', strtotime($pessoa->updated_at)) }}</th>
            </tr>
            <a href="/pessoas">Cancelar</a>
            <button onclick="{{salvarEdicao($pessoa)}}">Salvar</button>
    </body>
</html>
