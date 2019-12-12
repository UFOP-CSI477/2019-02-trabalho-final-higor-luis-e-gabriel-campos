<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Consulta;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Paciente $model)
    {
        return view('patients.index', ['pacientes' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Paciente $paciente)
    {
        $paciente = new Paciente;
        $paciente->nome = $request->nome;
        $paciente->telefone = $request->telefone;
        $paciente->nascimento = $request->data;
        $paciente->endereco = "{$request->rua}, {$request->numero}, {$request->cidade}, {$request->estado}";
        $paciente->cpf = $request->cpf;
        $paciente->save();

        return redirect()->route('pacientes.index')->withStatus(__('Paciente criado com sucesso.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(Paciente $paciente)
    {
        return view('patients.edit', compact('paciente'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(Request $request, Paciente $paciente)
    {

        $newPaciente = Paciente::findOrFail($paciente->id);
        $newPaciente->nome = $request->nome;
        $newPaciente->telefone = $request->telefone;
        $newPaciente->nascimento = $request->data;
        $newPaciente->endereco = "{$request->rua}, {$request->numero}, {$request->cidade}, {$request->estado}";
        $newPaciente->cpf = $request->cpf;
        $newPaciente->save();
        return redirect()->route('pacientes.index')->withStatus(__('Paciente editado com sucesso.'));
    }
    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        if (Consulta::where('paciente_id', $paciente->id)->exists()) {
            return redirect()->route('pacientes.index')->withStatus(__('Não foi possível excluir o paciente pois ele tem consultas marcadas!'));
        }
        return redirect()->route('pacientes.index')->withStatus(__('Paciente excluido com sucesso.'));
    }
}
