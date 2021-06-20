<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </head>
    <body>
        <h1>Home</h1>
        <div class="opcoesContainer">
            <div class="opcoesUsuarios">
                <h2>Para usuários</h2>
                <a href="/criarpessoa">Cadastro de pessoa</a>
                <br />
                <a href="/criarpessoajuridica">Cadastro de pessoa jurídica</a>
                <br />
                <a href="/criartelefone">Cadastrar novo telefone</a>
                <br />
                <a href="/criarendereco">Cadastrar novo Endereco</a>
            </div>
            <div class="opcoesAdmin">
                <h2>Para admins</h2>
                <p>Fazer login (desabilitado)</p>
                <a href="/pessoas">Lista de pessoas</a>
                <br />
                <a href="/pessoasjuridicas">Lista de pessoas jurídicas</a>
                <br />
                <a href="/telefones">Lista de telefones</a>
                <br />
                <a href="/enderecos">Lista de endereços</a>
            </div>
        </div>
    </body>
</html>
