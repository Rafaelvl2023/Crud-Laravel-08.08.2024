<!-- resources/views/clientes/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Cliente</title>
</head>
<body>
    <h1>Detalhes do Cliente</h1>
    <p>ID: {{ $cliente->id }}</p>
    <p>Nome: {{ $cliente->nome }}</p>
    <p>Email: {{ $cliente->email }}</p>
    <a href="{{ route('clientes.index') }}">Voltar</a>
</body>
</html>
