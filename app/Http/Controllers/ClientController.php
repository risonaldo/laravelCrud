<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{

    /**
     * lista os clientes
     *
     * @return View
     */
    public function index(): View
    {
        $clients = Client::get();

        return view('client.index')->with('clients', $clients);
    }

    /**
     * Mostra um cliente especifico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $client = Client::find($id);

        return view('client.show')->with('clients', $client);
    }

    /**
     * exibir o formulario de criação
     *
     * @return View
     */
    public function cadastrar(): View
    {
        return view('client.create');
    }

    /**
     * cria um cliente no banco de dados
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados =  $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }

    /**
     * mostra o formulario para edição
     *
     * @param integer $id
     * @return View
     */
    public function editar(int $id): View
    {
        $client = Client::find($id);

        return view('client.editar')->with('clients', $client);
    }

    /**
     * atualizar os cliente no banco de dados 
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::find($id);

        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect('/clients');
    }

    /**
     * apaga cliente no banco
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function delete(int $id): RedirectResponse
    {
        $client = Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
}
