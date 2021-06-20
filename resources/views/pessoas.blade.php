<!DOCTYPE html>
<html>
    <head>
        <title>Pessoas</title>
        <link href="{{ URL::asset('css/users.css') }}" rel="stylesheet" >
    </head>
    <body>
        <h2>Lista de Pessoas cadastradas</h2>
        <!--<input type="text" id="filtroNome" value="{{ $nomeFiltro }}" placeholder="Filtrar lista por nome">-->
        <!--<button onclick="filtrarPorNome()" >Filtrar</button>-->
        <table id="listaUsuarios">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Gênero</th>
                <th>Data de Nascimento</th>
                <th>Telefones</th>
                <th>Endereços</th>
                <th>Data de cadastro</th>
                <th>Última atualização</th>
            </tr>
            @foreach($pessoas as $pessoa)
            <tr id="row{{ $loop->index }}">
                <th>{{ $pessoa->id }}</th>
                <th class="nomePessoa">{{ $pessoa->nome }}</th>
                <th>{{ $pessoa->cpf }}</th>
                <th>{{ $pessoa->rg }}</th>
                <th><?php if($pessoa->genero == 0) echo "Masculino"; elseif($pessoa->genero == 1) echo "Feminino"; else echo "Não definido"; ?></th>
                <th>{{ $pessoa->data_nascimento }}</th>
                <th>
                    <?php
                    $telefones = getTelefonePessoa($pessoa->id);
                    for($i = 0; $i < count($telefones); $i++){
                        echo ' | ' . $telefones[$i]->numero_telefone . ' ';
                    } ?>
                </th>
                <th>
                    <?php
                    $enderecos = getEnderecoPessoa($pessoa->id);
                    for($i = 0; $i < count($enderecos); $i++){
                        echo ' | ' . $enderecos[$i]->endereco . ' ';
                    }
                    ?>
                </th>
                <th>{{ date('d-m-Y', strtotime($pessoa->created_at)) }}</th>
                <th>{{ date('d-m-Y', strtotime($pessoa->updated_at)) }}</th>
                <th class="botaoAcao"><a href="/editarpessoa/{{$pessoa->id}}">Editar</a>
                    <form method="POST" action="/api/pessoa/{{$pessoa->id}}">
                        @method('DELETE')
                        <input type="submit" value="Deletar">
                    </form>
                </th>
            </tr>
            @endforeach
        </table>
        <a href="/">Retornar ao início</a>
    </body>
    <!-- ><script>
         Não funcionou
     function filtrarPorNome(){
         let nomesEl = document.getElementsByClassName('nomePessoa');
         let filtro = document.getElementById('filtroNome').value;
         console.log(filtro);
         for(var i = 0; i < nomesEl.length; i++){
             if(!nomesEl[i].textContent.toLowerCase().includes(filtro.toLowerCase())){
                 //console.log(`nomeEL: ${nomesEl[i].toLowerCase()} | ${filtro.toLowerCase()}`);
                 console.log(nomesEl[i].textContent);
                 document.getElementById(`row${i}`).remove();
             }
         }
     }
    </script>-->
</html>
