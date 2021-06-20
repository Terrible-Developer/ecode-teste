<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Pessoa</title>
        <link rel="stylesheet" href="{{ asset('css/cadastropessoa.css') }}">
    </head>
    <body>
        <h1>Cadastrar nova pessoa jurídica</h1>
        <form id="listaUsuario" method="POST" action="/api/pessoajuridicas">
            <label for="razao_social">Razão Social</label>
            <input type="text" name="razao_social" placeholder="Razão Social"></input>
            <label for="nome_fantasia">Nome Fantasia</label>
            <input type="text" name="nome_fantasia" placeholder="Nome Fantasia"></input>
            <label for="cnpj">CNPJ</label>
            <input type="text" name="cnpj" placeholder="CNPJ"></input>
            <label for="inscricao_estadual">Inscrição Estadual</label>
            <input type="text" name="inscricao_estadual" placeholder="Inscrição Estadual"></input>
            <label for="fundada_em">Data de fundação</label>
            <input type="date" name="fundada_em" ></input>
            <input type="submit" value="Salvar">
        </form>
            <a href="/">Cancelar</a>
    </body>
</html>
