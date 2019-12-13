@extends('layouts.app', ['activePage' => 'doctors-management', 'titlePage' => __('Gerenciar Medicos')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-bg">
                        <h4 class="card-title ">{{ __('Consultas Agendadas') }}</h4>
                        <p class="card-category"> {{ __('Aqui você pode visualizar as consultas do medico selecionado') }}</p>
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
                                        {{ __('ID') }}
                                    </th>
                                    <th>
                                        {{ __('Data') }}
                                    </th>
                                    <th>
                                        {{ __('Paciente') }}
                                    </th>
                                    <th>
                                        {{ __('Descricao') }}
                                    </th>
                                    <th>
                                        {{ __('Valor') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($consultas as $consulta)
                                    <tr>
                                        <td>
                                            {{ $consulta->idconsulta }}
                                        </td>
                                        <td>
                                            {{ $consulta->data }}
                                        </td>
                                        <td>
                                            {{ $consulta->paciente }}
                                        </td>
                                        <td>
                                            {{ $consulta->descricao }}
                                        </td>
                                        <td>
                                            {{ $consulta->valor }}
                                        </td>
                                    </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <a href="{{ route('medicos.index') }}" class="btn btn-primary btn-bg">{{ __('Voltar para a lista') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection