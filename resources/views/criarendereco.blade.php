<!DOCTYPE html>
<html>
    <head>
        <title>Novo Endereco</title>
        <link rel="stylesheet" href="{{ asset('css/cadastroendereco.css') }}"></link>
    </head>
    <body>
        <h2>Cadastrar novo endereco</h2>
        <form method="POST" action="/api/endereco" id="listaEnderecos">
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
            <label for="estado">Estado</label>
            <input name="estado" type="text" placeholder="Estado">
            <label for="cidade">Cidade</label>
            <input name="cidade" type="text" placeholder="Cidade">
            <label for="endereco">Endereço</label>
            <input name="endereco" type="text" placeholder="Endereço">
            <label for="numero">Número</label>
            <input name="numero" type="text" placeholder="Número">
            <input type="submit" value="Salvar">
        </form>
            <a href="/">Cancelar</a>
    </body>
</html>
