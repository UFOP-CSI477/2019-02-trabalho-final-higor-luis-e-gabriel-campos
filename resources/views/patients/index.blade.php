@extends('layouts.app', ['activePage' => 'patients-management', 'titlePage' => __('Gerenciar Pacientes')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-paciente">
                        <h4 class="card-title ">{{ __('Pacientes') }}</h4>
                        <p class="card-category"> {{ __('Aqui você pode gerenciar os pacientes') }}</p>
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
                                        {{ __('Nome') }}
                                    </th>
                                    <th>
                                        {{ __('Telefone') }}
                                    </th>
                                    <th>
                                        {{ __('Nascimento') }}
                                    </th>
                                    <th>
                                        {{ __('Endereco') }}
                                    </th>
                                    <th>
                                        {{ __('CPF') }}
                                    </th>
                                    <th>
                                        {{ __('Ações') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($pacientes as $paciente)
                                    <tr>
                                        <td>
                                            {{ $paciente->id }}
                                        </td>
                                        <td>
                                            {{ $paciente->nome }}
                                        </td>
                                        <td>
                                            {{ $paciente->telefone }}
                                        </td>
                                        <td>
                                            {{ $paciente->nascimento }}
                                        </td>
                                        <td>
                                            {{ $paciente->endereco }}
                                        </td>
                                        <td>
                                            {{ $paciente->cpf }}
                                        </td>
                                        <td class="td-actions">
                                            <form action="{{ route('pacientes.destroy', $paciente) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('pacientes.edit', $paciente) }}" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Tem certeza que deseja excluir este paciente?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('minhasConsultas', $paciente->id,$paciente) }}" data-original-title="" title="">
                                                    <i class="fa fa-search"></i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('pacientes.create') }}" class="btn btn-sm btn-primary btn-paciente">{{ __('Adicionar Paciente') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection