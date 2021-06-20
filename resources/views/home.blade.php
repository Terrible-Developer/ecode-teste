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
                <p>Cadastrar novo telefone</p>
                <p>Cadastrar novo endereço</p>
            </div>
            <div class="opcoesAdmin">
                <h2>Para admins</h2>
                <p>Fazer login (desabilitado)</p>
                <a href="/pessoas">Lista de pessoas DEV</a> <br />
                <a href="/pessoasjuridicas">Lista de pessoas jurídicas DEV</a>
            </div>
        </div>
    </body>
</html>
