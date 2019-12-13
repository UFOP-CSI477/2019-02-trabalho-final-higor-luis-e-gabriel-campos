@extends('layouts.app', ['activePage' => 'doctors-management', 'titlePage' => __('Gerenciar Médicos')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-bg">
                        <h4 class="card-title ">{{ __('Medicos') }}</h4>
                        <p class="card-category"> {{ __('Aqui você pode gerenciar os médicos') }}</p>
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
                                        {{ __('CRM') }}
                                    </th>
                                    <th>
                                        {{ __('Nome') }}
                                    </th>
                                    <th>
                                        {{ __('Nascimento') }}
                                    </th>
                                    <th>
                                        {{ __('Especialização') }}
                                    </th>
                                    <th>
                                        {{ __('Telefone') }}
                                    </th>
                                    <th>
                                        {{ __('Ações') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($medicos as $medico)
                                    <tr>
                                        <td>
                                            {{ $medico->id }}
                                        </td>
                                        <td>
                                            {{ $medico->crm }}
                                        </td>
                                        <td>
                                            {{ $medico->nome }}
                                        </td>
                                        <td>
                                            {{ $medico->nascimento }}
                                        </td>
                                        <td>
                                            {{ $medico->especializacao }}
                                        </td>
                                        <td>
                                            {{ $medico->telefone }}
                                        </td>
                                        <td class="td-actions">
                                            <form action="{{ route('medicos.destroy', $medico) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('medicos.edit', $medico) }}" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Tem certeza que deseja excluir este médico?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('consultas', $medico->id,$medico) }}" data-original-title="" title="">
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
                                <a href="{{ route('medicos.create') }}" class="btn btn-sm btn-primary btn-bg">{{ __('Adicionar Médico') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection