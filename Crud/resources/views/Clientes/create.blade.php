<!-- resources/views/clientes/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Cliente</title>
</head>
<body>
    <h1>Adicionar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('clientes.index') }}">Voltar</a>
</body>
</html>
