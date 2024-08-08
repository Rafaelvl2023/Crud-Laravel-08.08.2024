<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
            padding: 20px;
            background-color: #007bff;
            color: white;
            margin: 0;
        }
        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
            margin: 10px 0;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Cliente</h1>
        <p>ID: {{ $cliente->id }}</p>
        <p>Nome: {{ $cliente->nome }}</p>
        <p>Email: {{ $cliente->email }}</p>
        <a href="{{ route('clientes.index') }}">Voltar</a>
    </div>
</body>
</html>

