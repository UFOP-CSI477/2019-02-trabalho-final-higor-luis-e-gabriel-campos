@extends('layouts.app', ['activePage' => 'patients-management', 'titlePage' => __('Gerenciar Pacientes')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary bg-card card-bg">
                        <h4 class="card-title ">{{ __('Consultas') }}</h4>
                        <p class="card-category"> {{ __('Aqui você pode ver o histórico de consultas do paciente selecionado') }}</p>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        {{ __('Data/Hora') }}
                                    </th>
                                    <th>
                                        {{ __('Medico') }}
                                    </th>
                                    <th>
                                        {{ __('Valor') }}
                                    </th>
                                    <th>
                                        {{ __('Descrição') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($consultas as $consulta)
                                    <tr>
                                        <td>
                                            {{ $consulta->data }}
                                        </td>
                                        <td>
                                            {{ $consulta->medico }}
                                        </td>
                                        <td>
                                            {{ $consulta->valor }}
                                        </td>
                                        <td>
                                            {{ $consulta->descricao }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <a href="{{ route('pacientes.index') }}" class="btn btn-primary btn-paciente">{{ __('Voltar para a lista') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection