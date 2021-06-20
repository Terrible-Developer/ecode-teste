<!DOCTYPE html>
<html>
    <head>
        <title>Novo Telefone</title>
        <link rel="stylesheet" href="{{ asset('css/cadastrotelefone.css') }}">
    </head>
    <body>
        <h2>Cadastrar novo telefone</h2>
        <form id="listaTelefones" method="POST" action="/api/telefone">
            <label for="id_pessoa">Pessoa</label>
            <select name="id_pessoa">
                <option value="0">Nenhuma</option>
                @foreach($pessoas as $pessoa)
                    <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                @endforeach
            </select>
            <label for="id_pessoa_juridica">Pessoa</label>
            <select name="id_pessoa_juridica">
                <option value="0">Nenhuma</option>
                @foreach($pessoasjuridicas as $pessoajuridica)
                    <option value="{{ $pessoajuridica->id }}">{{ $pessoajuridica->nome_fantasia }}</option>
                @endforeach
            </select>
            <label for="numero_telefone">Número de telefone</label>
            <input name="numero_telefone" type="text" placeholder="Número">
            <input type="submit" value="Salvar">
        </form>
            <a href="/">Cancelar</a>
    </body>
</html>
