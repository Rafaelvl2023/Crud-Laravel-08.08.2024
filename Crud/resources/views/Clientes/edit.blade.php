<!-- resources/views/clientes/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $cliente->nome }}" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $cliente->email }}" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('clientes.index') }}">Voltar</a>
</body>
</html>
