@extends('layouts.app', ['activePage' => 'patients-management', 'titlePage' => __('User Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
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
                                    <th class="text-right">
                                        {{ __('Actions') }}
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
                                        <td class="td-actions text-right">
                                            <form action="{{ route('doctors.destroy', $medico) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('doctors.edit', $medico) }}" data-original-title="" title="">
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
                                <a href="{{ route('doctors.create') }}" class="btn btn-sm btn-primary">{{ __('Adicionar Médico') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection