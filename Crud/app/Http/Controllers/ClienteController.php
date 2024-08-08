<?php

// app/Http/Controllers/ClienteController.php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /* ***************************************************************************************************************** */
    // Função index tela principal
    public function index()
    {
        // O método all() no Eloquent é usado para recuperar todos os registros de uma tabela no banco de dados.
        $clientes = Cliente::all();
        // A função compact em PHP cria um array associativo a partir de variáveis e seus valores correspondentes.
        return view('clientes.index', compact('clientes'));
    }

    /* ***************************************************************************************************************** */
    // Função create exibe o formulário para cadastrar um novo recurso
    public function create()
    {
        return view('clientes.create');
    }

    /* ***************************************************************************************************************** */
    // Função store salva os dados no banco de dados
    public function store(Request $request)
    {
        // Validação dos Dados
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        // Criação do Cliente
        Cliente::create($request->all());
        // Redirecionar para a página inicial
        // With é um método para anexar dados a sessão, que estarão disponíveis na próxima requisição
        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso.');
    }

    /* ***************************************************************************************************************** */
    // A função show em um controlador Laravel é usada para exibir os detalhes de um único recurso.
    public function show(Cliente $cliente)
    {
        // A função compact em PHP cria um array associativo a partir de variáveis e seus valores correspondentes.
        return view('clientes.show', compact('cliente'));
    }

    /* ***************************************************************************************************************** */
    public function edit(Cliente $cliente)
    {
        // A função compact em PHP cria um array associativo a partir de variáveis e seus valores correspondentes.
        return view('clientes.edit', compact('cliente'));
    }

    /* ***************************************************************************************************************** */
    // O Request contém os dados da requisição.
    // O Cliente é o recurso específico que está sendo atualizado.
    public function update(Request $request, Cliente $cliente)
    {
        // Validação dos Dados
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        // atualiza o modelo $cliente com todos os dados fornecidos na requisição HTTP
        $cliente->update($request->all());
        // A função redirect no Laravel é usada para gerar uma resposta HTTP que redireciona o navegador para uma URL diferente.
        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    /* ***************************************************************************************************************** */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        // A função redirect no Laravel é usada para gerar uma resposta HTTP que redireciona o navegador para uma URL diferente.
        return redirect()->route('clientes.index')->with('success', 'Cliente deletado com sucesso.');
    }
}
