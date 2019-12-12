<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Consulta;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Medico $model)
    {
        return view('doctors.index', ['medicos' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Medico $medico)
    {
        $medico = new Medico;
        $medico->crm = $request->crm;
        $medico->nome = $request->nome;
        $medico->nascimento = $request->nascimento;
        $medico->especializacao = $request->especializacao;
        $medico->telefone = $request->telefone;
        $medico->save();

        return redirect()->route('medicos.index')->withStatus(__('Medico criado com sucesso.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(Medico $medico)
    {
        return view('doctors.edit', compact('medico'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(Request $request, Medico $medico)
    {

        $newMedico = Medico::findOrFail($medico->id);
        $newMedico->crm = $request->crm;
        $newMedico->nome = $request->nome;
        $newMedico->nascimento = $request->nascimento;
        $newMedico->especializacao = $request->especializacao;
        $newMedico->telefone = $request->telefone;
        $newMedico->save();
        return redirect()->route('medicos.index')->withStatus(__('Medico editado com sucesso.'));
    }
    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Medico $medico)
    {
        
        if (Consulta::where('medico_id', $medico->id)->exists()) {
            return redirect()->route('medicos.index')->withStatus(__('Não foi possível excluir o medico pois ele tem consultas marcadas!'));
        }
        $medico->delete();
        return redirect()->route('medicos.index')->withStatus(__('Medico excluido com sucesso.'));
    }
}
