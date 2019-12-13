<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Consulta;
use App\Models\Paciente;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Consulta $model)
    {
        $consulta = Consulta::join('medicos', 'consultas.medico_id', '=', 'medicos.id')
            ->join('pacientes', 'consultas.paciente_id', '=', 'pacientes.id')
            ->select(['consultas.id AS idconsulta', 'medicos.id AS idmedico','pacientes.id AS idpaciente' , 'valor', 'pacientes.nome AS paciente', 'medicos.nome AS medico', 'descricao','data'])
            ->orderBy('data', 'ASC')->get();
        // $consulta = Consulta::join('paciente','requests.subject_id','=','subjects.id')
        //     ->where('user_id',auth()->user()->id)
        //     ->orderBy('date')->get();

        return view('consulta.index', ['consultas' => $consulta]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $medicos = Medico::orderBy('nome') -> get();  
        $pacientes = Paciente::orderBy('nome') -> get();  
        return view('consulta.create', ['medicos'=> $medicos, 'pacientes' => $pacientes]);
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Consulta $consulta)
    {
        $consulta = new Consulta;
        $consulta->data = "{$request->data} {$request->hora}";
        $consulta->medico_id = $request->medico_id;
        $consulta->paciente_id = $request->paciente_id ;
        $consulta->valor = $request->valor;
        $consulta->descricao = $request->descricao;
        $consulta->save();

        return redirect()->route('consulta.index')->withStatus(__('Consulta marcada com sucesso.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(Consulta $consulta,$data)
    {
        $teste = Consulta::find($data);
        $datetime = explode(" ",$teste->data);
        $data = $datetime[0];
        $hora = $datetime[1];
        $medicos = Medico::orderBy('nome')->get();
        $pacientes = Paciente::orderBy('nome')->get();
        // dd($teste); 
        return view('consulta.edit', ['hora'=> $hora, 'data'=> $data,'medicos'=> $medicos, 'pacientes' => $pacientes, 'teste' => $teste]);
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse 
     */

    public function update(Request $request,$id)
    {
        // dd($id);
        $newConsulta = Consulta::findOrFail($id);
        $newConsulta->data = "{$request->data} {$request->hora}";
        $newConsulta->medico_id = $request->medico_id;
        $newConsulta->paciente_id = $request->paciente_id;
        $newConsulta->valor = $request->valor;
        $newConsulta->descricao = $request->descricao;
        $newConsulta->save();
        return redirect()->route('consulta.index')->withStatus(__('Consulta editada com sucesso.'));
    }
    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
        return redirect()->route('consulta.index')->withStatus(__('Consulta excluido com sucesso.'));
    }
}
