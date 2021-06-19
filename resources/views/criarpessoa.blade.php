<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar Pessoa</title>
        <link rel="stylesheet" href="{{ asset('css/cadastropessoa.css') }}">
    </head>
    <body>
        <h1>Cadastrar nova pessoa</h1>
        <form id="listaUsuario" method="POST" action="/api/pessoa">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome"></input>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" placeholder="CPF"></input>
            <label for="rg">RG</label>
            <input type="text" name="rg" placeholder="RG"></input>
            <label for="genero">Gênero</label>
            <select name="genero">
                <option value="" selected hidden disabled>Selecionar</option>
                <option value="0" >Masculino</option>
                <option value="1" >Feminino</option>
                <option value="2" >Não definido</option>
            </select>
            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" name="data_nascimento" ></input>
            <input type="submit" value="Salvar">
        </form>
            <a href="/">Cancelar</a>
    </body>
</html>
