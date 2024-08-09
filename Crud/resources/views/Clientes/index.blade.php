<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
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
        .adicionar {
            text-align: center;
            align-items: center;
            margin-top: 10px;
            text-decoration: none;
        }
        .adicionar:hover a {
            background-color:  #007bff;
            border-radius: 5px;
            color: white;
            padding: 5px;
            border-color: #bd2130; /* Adiciona uma borda mais escura para um efeito de destaque */
            transform: scale(1.05); /* Adiciona um leve aumento no tamanho do botão */
            transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
        }
        .totalCadastros {
            text-align: center
        }
        table {
            border: 1px solid rgb(144, 195, 238);
            width: 80%;
            margin: 10px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #c82333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Lista de Clientes</h1>
        <div class="adicionar">
            <a href="{{ route('clientes.create') }}">Adicionar Cliente</a>
        </div>
        <div class="totalCadastros">
            <h5>Total de Clientes Cadastrados: {{ $totalClientes }}</h5>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Analise</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <a href="{{ route('clientes.show', $cliente->id) }}">Detalhes</a>
                </td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente->id)}}">Editar</a>
                </td>
                <td>
                    <form action="{{ route('clientes.destroy', $cliente->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="paginacao">
            {{ $clientes->onEachSide(0)->links() }}
        </div>
    </div>
</body>
</html>
