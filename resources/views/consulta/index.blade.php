@extends('layouts.app', ['activePage' => 'consulta-management', 'titlePage' => __('Gerenciar Consultas')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('Consultas') }}</h4>
                        <p class="card-category"> {{ __('Aqui você pode gerenciar as consultas') }}</p>
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
                                        {{ __('Medico') }}
                                    </th>
                                    <th>
                                        {{ __('Paciente') }}
                                    </th>
                                    <th>
                                        {{ __('Valor') }}
                                    </th>
                                    <th>
                                        {{ __('Descrição') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Actions') }}
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
                                            {{ $consulta->medico }}
                                        </td>
                                        <td>
                                            {{ $consulta->paciente}}
                                        </td>
                                        <td>
                                            {{ $consulta->valor }}
                                        </td>
                                        <td>
                                            {{ $consulta->descricao }}
                                        </td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('consulta.destroy', $consulta->idconsulta) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('consulta.edit', $consulta->idconsulta) }}" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('consulta.create') }}" class="btn btn-sm btn-primary">{{ __('Adicionar Consulta') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection