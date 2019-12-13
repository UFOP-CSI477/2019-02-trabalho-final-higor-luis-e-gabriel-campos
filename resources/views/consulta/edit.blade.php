@extends('layouts.app', ['activePage' => 'consulta-management', 'titlePage' => __('Gerenciar Consultas')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('consulta.update', $teste->id,$teste->id) }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('put')

                    <div class="card ">
                        <div class="card-header card-header-primary card-bg">
                            <h4 class="card-title">{{ __('Editar Consulta') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row" style="padding-bottom: 10px">
                                <label for="data" class="col-sm-2 col-form-label">{{ __('Data') }}</label>
                                <div class="col-md-5">
                                    <input value="{{$data}}" id="data" name="data" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="hora" class="col-sm-2 col-form-label">{{ __('Hora') }}</label>
                                <div class="col-md-5">
                                    <input value="{{$hora}}" id="hora" name="hora" type="time" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label class="col-sm-2 col-form-label">{{ __('Médico') }}</label>
                                <div class="col-md-2">
                                    <select id="medico" name="medico_id" style="height: 95%" id="medico" class="form-control" required>
                                        <option value="0" selected disabled>Médicos</option>
                                        @foreach ($medicos as $medico)
                                        <option value="{{$medico->id}}">{{$medico->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label class="col-sm-2 col-form-label">{{ __('Paciente') }}</label>
                                <div class="col-md-2">
                                    <select id="paciente" name="paciente_id" style="height: 95%" id="paciente" class="form-control" required>
                                        <option value="0" selected disabled>Pacientes</option>
                                        @foreach ($pacientes as $paciente)
                                        <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="valor" class="col-sm-2 col-form-label">{{ __('Valor') }}</label>
                                <div class="col-md-9">
                                    <input value="{{$teste->valor}}" id="valor" name="valor" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="descricao" class="col-sm-2 col-form-label">{{ __('Descrição') }}</label>
                                <div class="col-md-9">
                                    <input value="{{$teste->descricao}}" id="descricao" name="descricao" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-bg">{{ __('Save') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection